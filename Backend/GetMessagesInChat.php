<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if ($_SESSION['signedIn'] == true) {
    $myDbConn = ConnGet();
    if(array_key_exists("ChatId", $_GET)){
        $chatId = $_GET["ChatId"];
        $dataset = getAllChatsMessages($myDbConn, $chatId);
        $rowArray = array();
        $foundChats = false;

        while ($row = mysqli_fetch_array($dataset)) {
            $rowArray[] = array('MessageId' => $row[0], 'Content' => $row[1], 'TimeStamp' => $row[2], 'userName' => $row[3], 'UserId' => $row[4]);
            $foundChats = true;
        }

        if($foundChats){
            $myJSON = json_encode($rowArray);
            mysqli_close($myDbConn);
            echo $myJSON;
        }else{
            mysqli_close($myDbConn);
            header("Location: ../index.php");
        }

    }
}


?>