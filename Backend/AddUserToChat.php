<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedInAdmin'] == True){
    $myDbConn = ConnGet();
    $userId = $_POST['UserId'];
    $chatId = $_POST['ChatId'];

    $dataset = addUserToChat($myDbConn, $userId ,$chatId);


    if($dataset){
        mysqli_close($myDbConn);
        header("Location: ../Admin.php");
    }
}


?>