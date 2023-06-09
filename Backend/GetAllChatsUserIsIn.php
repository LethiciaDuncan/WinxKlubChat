<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if ($_SESSION['signedIn'] == true) {
    $myDbConn = ConnGet();
    $userId = $_SESSION['UserId'];
    $dataset = getAllOfUserChats($myDbConn, $userId);
    $rowArray = array();
    $foundChats = false;

    while ($row = mysqli_fetch_array($dataset)) {
        $rowArray[] = array('ChatId' => $row[0], 'ChatName' => $row[1]);
        $foundChats = true;
    }

    $myJSON = json_encode($rowArray);
    echo $myJSON;

    if (!$foundChats) {
        header("Location: ../index.php");
    }
}


?>