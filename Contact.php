
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
        
         <div class =" headerDiv"></div>
        <img id ="img" src="/Images/logo.png" style="width:50px;height:35px;">
        <h1 class="display-4" id="title"> Winx Klub Contact Page</h1>
        <h3 class="d1" id="James">James Pulley. Phone Number: 202-555-0370, Email: jpulley@student.neumont.edu </h3>
        <h3 class="d2" id="Lethicia">Lethicia Duncan. Phone Number: 202-555-0600, Email: lduncan@student.neumont.edu </h3>
        <h3 class="d3" id="Moises">Moises Olea. Phone Number: 202-555-0056, Email: molea@student.neumont.edu</h3>
        <h3 class="d4" id="Chris">Christopher Macias. Phone Number: 202-555-0397, Email: cmacias@student.neumont.edu</h3>
        <button class="btn btn-light btn-lg" onclick="redirectIndex()" id="HomeButton">Home
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectAbout()" id="AboutButton">About
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectLogin()" id="LogButton">Login
        </button>
        <button class="btn btn-light btn-lg" onclick="redirectSignin()" id="SignButton">SignUp
        </button>
      
        <pre id="bodyText">
        Welcome to Winx Klub Contact page. This is a page where you can find information of the creators of the sight. 
        Please log in if you already have an account, else please use the sign up button to get started.

        </pre>

        <div class ="footerDiv">
            <footer id="footerText">
                Winx Klub is best Club
            </footer>
        </div>
        <script>function redirectLogin() { window.location.href = "Login.php"; }
            function redirectSignin() { window.location.href = "Signup.php"; }
            function redirectAbout() {window.location.href = "About.php"; }
            function redirectIndex() {window.location.href = "index.php"; } </script>
        
        </body>

        </html>