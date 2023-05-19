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
<img id="img" src="/Images/logo.png" style="width:50px;height:35px;" />
<div id=" headerDiv"></div>
<ul id="navBar">
    <li>
        <a href="/MessagesPage.php">Messages</a>
    </li>
    <li>
        <a href="/ProfilePage.php">Profile</a>
    </li>
    <li>
        <a href="/Conversations.php">Conversations</a>
    </li>
</ul>
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
    <button class="btn btn-light btn-lg" id="LogOutButton">
        Logout
    </button>
    <form id="bioText"  action="">
            <div ckass ="messageDiv">
            <label for="bioText"></label><br />
            <input type="text" id="bioText" name="bioText" value="Tell us about you" />
            </div>
            <!--<p id="GetProfile"></p>-->
            <p id="Username" class="infoUsername"></p>

            <p id="Email" class="infoEmail"></p>

            <p id="Bio" class="infoBio"></p>

            <p id="ID" hidden class="infoId"></p>
            
            


            <input type="submit" value="Submit" />
         </form>

</body>
</html>
 <div class ="footerDiv">
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
        
        request.open('GET', './Backend/GetProfile.php');
        request.onload=loadComplete;
        request.send();
        

    }


    function loadComplete(evt) {
        var myResponse;
        var myData;
        var myUsername = "Username:";
        var myId = "ID:";
        var myEmail = "Email:";
        var myBio = "Bio:";
/*        var myReturn = "<table><tr><td>Id: &nbsp;  &nbsp; </td><td>Name: &nbsp;  &nbsp; </td><td>Email: &nbsp;  &nbsp; </td><td>Bio: &nbsp;  &nbsp; </td>";
*/
        myResponse = request.responseText;
        console.log(myResponse)
        //alert("A: " + myResponse); // Use for debugging
        //document.getElementById("A").innerHTML = myResponse; // Display the json for debugging
        myData = JSON.parse(myResponse);
        console.log(myData)

        /*for (index in myData) {
            myReturn += "<tr><td>" +
                myData[index].Id + "</td><td>" +
                myData[index].Username + "</td><td>" +
                myData[index].Email + "</td><td>" +
                myData[index].Bio + "</td><td>";
               
        }
        myReturn += "</table";
        document.getElementById("GetProfile").innerHTML = myReturn;*/

        for (index in myData) {
            myUsername += "<tr><td>" +
                myData[index].Username + "</td><td>";
        }
        myUsername += "<tr><td>";
        document.getElementById("Username").innerHTML = myUsername;

        for (index in myData) {
            myId += "<tr><td>" +
                myData[index].Id + "</td><td>";
        }
        myId += "<tr><td>";
        document.getElementById("ID").innerHTML = myId;

        for (index in myData) {
            myEmail += "<tr><td>" +
                myData[index].Email + "</td><td>";
        }
        myEmail += "<tr><td>";
        document.getElementById("Email").innerHTML = myEmail;

        for (index in myData) {
            myBio += "<tr><td>" +
                myData[index].Bio + "</td><td>";
        }
        myBio += "<tr><td>";
        document.getElementById("Bio").innerHTML = myBio;


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