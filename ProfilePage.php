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
    <button class="btn btn-light btn-lg" id="LogOutButton">
        Logout
    </button>
    <<form id="bioText"  action="">
            <div ckass ="messageDiv">
            <label for="bioText">Bio</label><br />
            <input type="text" id="bioText" name="bioText" value="Tell us about you" />
            </div>
            <input type="submit" value="Submit" />
         </form>

</body>

<?php
include_once('Footer.php');
?>

</html>