
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
        
         <div class ="headerDiv"></div>
        <img id ="img" src="/Images/logo.png" style="width:50px;height:35px;">
        <h1 class="display-4" id="title"> Winx Klub</h1>
        <button class="btn btn-light btn-lg" onclick="redirectLogin()" id="LogButton">Login
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectSignin()" id="SignButton">SignUp
        </button>
        
     
        <pre id="bodyText">
        Welcome to Winx Klub Chat. This is a site where you can message other people. 
        Please log in if you already have an account, else please use the sign up button to get started.

        </pre>
       <div class ="footerDiv">
            <footer id="footerText">
                 Winx Klub is best Club
                <nav  class="navBar2">
                <ul>
                 <li>
                   <a href="/About.php">About</a>
                </li>
                <li>
                 <a href="/Contact.php">Contact</a>
                </li>
                <li>
                <a href="/index.php">Home</a>
                </li>
                </ul>
                </nav>
                 
            </footer>
        </div>

        <script>function redirectLogin() { window.location.href = "Login.php"; }
            function redirectSignin() { window.location.href = "Signup.php"; } 
        </script>
        
        </body>

        </html>


