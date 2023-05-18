<?php
include_once('Header.php');
?>
<!Doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/Style.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" />
    <style>
            body{
                font-family: 'Rowdies', cursive;
            }
            pre{
                font-family: 'Rowdies', cursive;
            }
    </style>
</head>

<body>
    <h1 class="display-4" id="title"> Messages</h1>

        <form id="formText"  action="">
            <div ckass ="bioDiv">
            <label for="userName">Send To:</label><br />
            <input type="text" id="userNameSend" name="userNameSend"/><br />
            <label for="messageText"></label><br />
            <input type="text" id="messageText" name="messageText" /><br /><br />
            </div>
            <input type="submit" value="Submit" />
         </form>
    <?php
            if(array_key_exists("ChatId", $_GET)){
            $chatId = $_GET['ChatId'];
            echo "<div id='ChatId' hidden>" . $chatId . "</div>";
        }
    ?>

    <script>
    var request = new XMLHttpRequest();

    window.onload = (event) => {
        loadJson()
    }

    function loadJson() {
        let chatId = document.getElementById("ChatId").innerText;
        if (chatId) {
             request.open('GET', './Backend/GetMessagesInChat.php?ChatId=' + chatId);
                    request.onload=loadComplete;
                    request.send();

        }
       

    }


    function loadComplete(evt) {
        var myResponse;
        var myData;
        var myReturn = "";

        myResponse = request.responseText;
        console.log(myResponse)
        //alert("A: " + myResponse); // Use for debugging
        //document.getElementById("A").innerHTML = myResponse; // Display the json for debugging
        myData = JSON.parse(myResponse);
        console.log(myData)
        // alert(myData);

        // Loop through each json record and create the HTML

        //for (index in myData) {
         //   console.log(myData)
        //    myReturn += "<tr><td>" +
       //         myData[index].Id + "</td><td>" +
        //        myData[index].name + "</td><td>" +
       //         myData[index].phoneNumber + "</td></tr>";

       // }
       // myReturn += "</table>";
        //document.getElementById("result").innerHTML = myReturn;// Display table

    }
    </script>
    
        </body>

       

<?php
include_once('Footer.php');
?>
</html>