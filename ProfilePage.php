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
    <h1 class="display-4" id="title"> User</h1>
    <button class="btn btn-light btn-lg" onclick="redirectLogin()" id="LogOutButton">
        Logout
    </button>
    <form class="bioText"  action="">
            <div id ="bioDiv">
            <label for="bioText">Bio</label><br />
            <input type="text" id="bioText" name="bioText" value="Tell us about you" />
            </div>
        <input id="submitbutton" type="submit" value="Submit" />
         </form>

</body>
</html>
<?php
include_once('Footer.php');
?>

<script>
        function redirectLogin() { window.location.href = "*/Logout.php"; }
        var request = new XMLHttpRequest();

    window.onload = (event) => {
        loadJson()
    }

    function loadJson() {
        
        request.open('GET', './Backend/GetProfile.php');
        request.onload=loadComplete;
        request.send();
        

    }


    function loadComplete(evt) {
        var myResponse;
        var myData;
        var myReturn = "<table><tr><td>Id &nbsp;  &nbsp; </td><td>Name &nbsp;  &nbsp; </td><td>Phone Number &nbsp;  &nbsp; </td></tr>";

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