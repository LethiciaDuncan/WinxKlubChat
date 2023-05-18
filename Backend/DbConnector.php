<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'Nonfiction10?');
DEFINE ('DB_SERVER', 'localhost:3306');
DEFINE ('DB_NAME', 'winxklubchat');

session_start();

 function ConnGet() {
    // $dbConn will contain a resource link to the database
    // @ Don't display error

    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3306)
    OR die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}


function addNewUser($dbConn,$username, $email, $password, $Bio){
    $query = "insert into users (UserName, Email, Password, Bio)
values ('" . $username . "', '" . $email . "', '" . $password . "', '" . $Bio . "')";
    return @mysqli_query($dbConn, $query);
}

function checkifUserExists($dbConn,$username){
    $query = "select * from users where UserName = '" . $username . "' ;";
    return @mysqli_query($dbConn, $query);
}

function getUser($dbConn, $id){
    $query = "select * from users where UserId = '" . $id . "' ;";
    return @mysqli_query($dbConn, $query);
}

function deleteUser($dbConn, $username){
    $query = "delete from users user where user.UserName =" . $username;
    return @mysqli_query($dbConn, $query);
}

function addMessageToChat($dbConn, $Message ,$UserId, $ChatId){
    $query = "insert into messages (Content, TimeStamp, UserId, ChatId)
    values('" . $Message . "', current_date(), " . $UserId . ", " . $ChatId . ");";
    return @mysqli_query($dbConn, $query);

}


function getAllOfUserChats($dbConn, $UserId){
       $query = "select ChatId, ChatName
        from (select users.UserId, chats.ChatId, chats.ChatName
        from userchats
	        inner join chats
		on userchats.ChatId = chats.ChatId
	        inner join users
		on userchats.UserId = users.UserId ) as AllChats
            where AllChats.UserId =" . $UserId . ";";
       return @mysqli_query($dbConn, $query);

}

function getAllChatsMessages($dbConn, $chatId){

    $query = "select *
        from messages
        where messages.ChatId = " . $chatId . ";";

    return @mysqli_query($dbConn, $query);
}

function addUserToChat($dbConn, $userId, $chatId){
    $query = "insert into userchats (UserId, ChatId) values (" . $userId . "," . $chatId . ");";
    return @mysqli_query($dbConn, $query);
}
?>