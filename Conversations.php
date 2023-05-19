<?php
include_once('Header.php');
?>
<!Doctype html>
<html lang="en">


<body>
    <h1 class="display-4" id="title"> Conversations</h1>

   <div class="conversationsDiv">
       <ol id="conversationList">
           <li></li>
           <li></li>
           <li></li>
       </ol>
   </div>

</body>

<?php
include_once('Footer.php');
?>
</html>

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