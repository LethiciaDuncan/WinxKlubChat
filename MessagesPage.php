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
    
        </body>

<?php
include_once('Footer.php');
?>
</html>