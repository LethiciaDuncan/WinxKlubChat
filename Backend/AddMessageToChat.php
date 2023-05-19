<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedIn'] == True){
    $myDbConn = ConnGet();
    $userId = $_SESSION['UserId'];
    $chatId = $_POST['ChatId'];
    $message = $_POST['Message'];
    $dataset = addMessageToChat($myDbConn, $message ,$userId, $chatId);


    if($dataset){

        mysqli_close($myDbConn);

        header("Location: ../messages.php?ChatId=" . $chatId . "");

    }

}


?>