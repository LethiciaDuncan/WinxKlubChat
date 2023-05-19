<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedInAdmin'] == True){
    $myDbConn = ConnGet();
    $chatName = $_POST['ChatName'];
    $dataset = addChat($myDbConn, $chatName);


    if($dataset){
        mysqli_close($myDbConn);
        header("Location: ../Admin.php");
    }
}


?>