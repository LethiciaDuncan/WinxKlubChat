<?php
include_once "DbConnector.php";

header('Content-Type: application/json');

$username = $_POST['username'];
$password = $_POST['password'];

$myDbConn = ConnGet();

$dataSet = checkifUserExists($myDbConn, $username);
   if ($dataSet){

        if($row = mysqli_fetch_array($dataSet)) {
            $storedPassword = $row['Password'];
            if($password == $storedPassword){
                $_SESSION['signedIn']=True;
                $_SESSION['UserId']= $row['UserId'];
                header("Location: ../ProfilePage.php");
            }else{
                header("Location: ../Login.php?alreadyTriedP=1");
            }
        }
    }else{
        header("Location: ../Login.php?alreadyTriedU=1");
   }

?>