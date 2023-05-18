<?php

if(array_key_exists("alreadyTriedP", $_GET)){
    echo "<div class='alert alert-danger'>Password does not match.</div>";
}

if(array_key_exists("alreadyTriedU", $_GET)){
    echo "<div class='alert alert-danger'>User could not be found.</div>";
}
?>
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
    <h1 class="display-4" id="title"> Log In</h1>
<form class="" action="Backend/login.php" method="post">
    <input  placeholder="Enter your username" class="u1" name="username" id="username" />
    <input placeholder="Enter your password"  class="p1" name="password" id="password" />
    <input type="submit" class="btnlog" placeholder="Login" />
</form>
</body>


