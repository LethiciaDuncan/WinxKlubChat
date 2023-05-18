
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
        <h1 class="display-4" id="title"> Winx Klub About Page</h1>
        <h3 class="d1" id="aboot">The Winx Klub is a group made out of extremely special people who joined the group, Why you may ask?<br/>
        We couldnt find another group. you know we're cool because we put the K in Kool.  </h3>
    
        <button class="btn btn-light btn-lg" onclick="redirectIndex()" id="AboutHomeButton">Home
        </button>
         <button class="btn btn-light btn-lg" onclick="redirectContact()" id="AboutContactButton">Contact
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
            function redirectContact() { window.location.href = "Contact.php"; }
            function redirectIndex() {window.location.href = "index.php"; } </script>
        
        </body>

        </html>