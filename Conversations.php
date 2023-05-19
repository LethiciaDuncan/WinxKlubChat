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
    <h1 class="display-4" id="title"> Conversations</h1>

    <div class="conversationsDiv">
        <ol id="conversationList" class="conversationsList"></ol>
    </div>



    <div class="footerDiv">
        <footer id="footerText">
            Winx Klub is best Club
        </footer>
    </div>


    <script>
    var request = new XMLHttpRequest();

    window.onload = (event) => {
        loadJson()
    }

    function loadJson() {

        request.open('GET', './Backend/GetAllChatsUserIsIn.php');
        request.onload=loadComplete;
        request.send();


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
        let chats = "";

        for (index in myData) {
            chats = chats + '<li><a href="MessagesPage.php?ChatId=' + myData[index].ChatId + '">' + myData[index].ChatName + '</a></li>';
        }
        document.getElementById("conversationList").innerHTML = chats;
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
</html>

<?php
?>

