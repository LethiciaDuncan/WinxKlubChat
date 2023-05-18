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
        
        <h1 class="display-4" id="title"> Winx Klub Contact Page</h1>
        <pre id="bodyText">
        James Pulley. Phone Number: 202-555-0370, Email: jpulley@student.neumont.edu
        Lethicia Duncan. Phone Number: 202-555-0600, Email: lduncan@student.neumont.edu
        Moises Olea. Phone Number: 202-555-0056, Email: molea@student.neumont.edu
        Christopher Macias. Phone Number: 202-555-0397, Email: cmacias@student.neumont.edu

        </pre>
        <button class="btn btn-light btn-lg" onclick="redirectLogin()" id="LogButton">Login
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectSignin()" id="SignButton">SignUp
        </button>


        <?php
        include_once('Footer.php');
        ?>
       <script>function redirectLogin() { window.location.href = "Login.php"; }
            function redirectSignin() { window.location.href = "Signup.php"; } 
        </script>
        
        </body>

        </html>