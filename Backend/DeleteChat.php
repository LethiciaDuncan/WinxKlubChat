<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedInAdmin'] == True){
    $myDbConn = ConnGet();
    $chatId = $_POST['ChatId'];
    $dataset = removeChat($myDbConn, $chatId);


    if($dataset){
        mysqli_close($myDbConn);
        header("Location: ../Admin.php");
    }
}


?>