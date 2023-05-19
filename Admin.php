
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
    <form>
        <input type="text" id="ChangeChatName" name="ChangeChatName"/>
    </form> <!--Change chat names-->

    <label>Create New Chat:</label>
    <form>
        <input type="number" id="NewChatId" name="NewChatId" />
    </form> 
    <form>
        <input type="text" id="NewChatName" name="NewChatName" />
    </form><!--Create Chat-->

    <label>Delete Chat:</label>
    <form>
        <input type="number" id="DeleteChatId" name="DeleteChatId" />
    </form>
    <form>
        <input type="text" id="DeleteChatName" name="DeleteChatName" />
    </form> <!--Delete Chat-->

    <label>Add User to Chat:</label>
    <form>
        <input type="number" id="AddUserId" name="AddUserId" />
    </form>
    <form>
        <input type="text" id="AddChatName" name="AddChatName" />
    </form> <!--Add User to  Chat-->

    <label>Remove User from Chat:</label>
    <form>
        <input type="number" id="RemoveUserId" name="RemoveUserId" />
    </form>
    <form>
        <input type="text" id="RemoveChatName" name="RemoveChatName" />
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



