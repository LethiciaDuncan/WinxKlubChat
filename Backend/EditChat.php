<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedIn'] == True){
    $myDbConn = ConnGet();
    $chatId = $_POST['ChatId'];
    $chatName = $_POST['ChatName'];
    $dataset = editChat($myDbConn, $chatId, $chatName);


    if($dataset){
        mysqli_close($myDbConn);
         header("Location: ../Admin.php");
    }
}


?>