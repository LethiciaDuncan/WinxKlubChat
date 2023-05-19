<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedIn'] == True){
    $myDbConn = ConnGet();
    $userId = $_POST['UserId'];
    $chatId = $_POST['ChatId'];

    $dataset = removeUserFromChat($myDbConn, $userId ,$chatId);

    mysqli_close($myDbConn);
    header("Location: ../Admin.php");
    
    mysqli_close($myDbConn);
}


?>