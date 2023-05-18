<?php

include_once "DbConnector.php";

header('Content-Type: application/json');




if($_SESSION['signedIn'] == True){
    $myDbConn = ConnGet();
    $userId = $_SESSION['UserId'];
    $dataset = getUser($myDbConn, $userId);
    $myJSON = "";


    if($row = mysqli_fetch_array($dataset)) {
        $myJSON = '[{"Id":"' . $userId . '","Username":"' . $row['UserName'] . '","Email":"' . $row['Email'] . '","Password":"' . $row['Password'] . '","Bio":"' . $row['Bio'] . '"}]';

            }else{

                header("Location: ../index.php");
                //send them back and alert them they used the wrong password
            }

    echo $myJSON;
}


?>