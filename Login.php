<?php

if(array_key_exists("alreadyTriedP", $_GET)){
    echo "<div class='alert alert-danger'>Password does not match.</div>";
}

if(array_key_exists("alreadyTriedU", $_GET)){
    echo "<div class='alert alert-danger'>User could not be found.</div>";
}
?>
<form action="Backend/login.php" method="post">
    <input placeholder="Enter your username" name="username" id="username" />
    <input placeholder="Enter your username" name="password" id="password" />
    <input type="submit" placeholder="Login" />
</form>



