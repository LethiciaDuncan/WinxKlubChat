<?php
include_once('Header.php');
?>
<!Doctype html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css"  href="/Style.css">
        <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap">
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
        
        <h1 class="display-4" id="title"> Winx Klub About Page</h1>
        <pre id="bodyText">
            Welcome to Winx Klub Contact page. This is a page where you can find information of the creators of the sight.
        Please log in if you already have an account, else please use the sign up button to get started.

        </pre>
        <button class="btn btn-light btn-lg" onclick="redirectLogin()" id="LogButton">Login
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectSignin()" id="SignButton">SignUp
        </button>
        
        <script>function redirectLogin() { window.location.href = "Login.php"; }
            function redirectSignin() { window.location.href = "Signup.php"; } 
        </script>
        
        </body>

<?php
include_once('Footer.php');
?>

        </html>