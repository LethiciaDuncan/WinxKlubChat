<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if ($_SESSION['signedIn'] == true) {
    $myDbConn = ConnGet();
    if(array_key_exists("ChatId", $_GET)){
        $chatId = $_GET["ChatId"];
        
        $chatId = $_SESSION['UserId'];
        $dataset = getAllChatsMessages($myDbConn, $chatId);
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
}


?>