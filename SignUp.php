<?php

if(array_key_exists("UserAlreadyExists", $_GET)){
    echo "<div class='alert alert-danger'>User already esists, please try another username!</div>";
}

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
    <img id="img" src="/Images/logo.png" style="width:50px;height:35px;" />
    <h1 class="display-4" id="title"> Sign Up</h1>

    <form action="Backend/SignUp.php" method="post">
        <input placeholder="Enter your username" class="u1" name="Username" id="Username" required />
        <input placeholder="Enter your Email" class="u1" name="Email" id="Email" required />
        <br />
        <input placeholder="Enter your Password" class="u1" name="Password" id="Password" required />
        <br />
        <input placeholder="Enter A Bio" class="p1" name="Bio" id="Bio" required />
        <br />
        <input type="submit" class="btnlog" value="Sign Up" />
    </form>
</body>

</html>

<?php 
include_once "Footer.php"
?>

