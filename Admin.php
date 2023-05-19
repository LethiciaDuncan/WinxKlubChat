
<?php
include_once('Header.php');
//Add Delete Edit chats
//Add Delete Edit Messages
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
    <h1 class="display-4" id="title"> Who you are doesn't matter, but what you do does, LETS SEE WHAT U WILL MANAGE TODAY!'</h1>
    <label>Change Chat Name:</label>
    <form action="Backend/EditChat.php" method="post">
        <input type="number" id="ChatId" name="ChatId" placeholder="Please Enter a ChatId" />
        <input type="text" id="ChatName" name="ChatName" placeholder="Please Enter a ChatName" />
        <input type="submit" value="Submit!" />
    </form> <!--Change chat names-->

    <label>Create New Chat:</label>
    <form action="Backend/CreateChat.php" method="post">
        <input type="text" id="ChatName" name="ChatName" placeholder="Please Enter a ChatName" />
        <input type="submit" value="Submit!" />
    </form><!--Create Chat-->

    <label>Delete Chat:</label>
    <form action="Backend/DeleteChat.php" method="post">
        <input type="number" id="ChatId" name="ChatId" placeholder="Please Enter a ChatId" />
        <input type="submit" value="Submit!" />
    </form>
    <!--Delete Chat-->

    <label>Add User to Chat:</label>
    <form action="Backend/AddUserToChat.php" method="post">
        <input type="number" id="UserId" name="UserId" placeholder="Please Enter a UserId" />

        <input type="number" id="ChatId" name="ChatId" placeholder="Please Enter a ChatId" />
        <input type="submit" value="Submit!" />
    </form> <!--Add User to  Chat-->




    <label>Remove User from Chat:</label>
    <form action="Backend/RemoveUserFromChat.php" method="post">

        <input type="number" id="UserId" name="UserId" placeholder="Please Enter a UserId" />

        <input type="number" id="ChatId" name="ChatId" placeholder="Please Enter a ChatId" />
        <input type="submit" value="Submit!" />
    </form><!--Remove User from Chat-->
    

</body>
</html>
<?php
include_once('Footer.php');
?>

<script>
    var request = new XMLHttpRequest();

    window.onload = (event) => {
        loadJson()
    }
        // create chats (chatname)


        // delete chats (chatId)
    function deleteChat() {

    }

    function deleteMessage() {

    }
        // change chat names (Chat id, chatname to update to)
    function EditChat() {

    }

    function EditMessage() {

    }




        


// add users to chats (userId, chatId)

// remove users from chats (userId, chatId)








    function loadJson() {

    }


    function loadComplete(evt) {
       
    }
</script>



