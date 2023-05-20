<?php
include_once "DbConnector.php";

header('Content-Type: application/json');

$email = $_POST['Email'];
$bio = $_POST['Bio'];
$username = $_POST['Username'];
$password = $_POST['Password'];

$myDbConn = ConnGet();

$dataSet = checkifUserExists($myDbConn, $username);

if(mysqli_num_rows($dataSet) != null){
    header("Location: ../SignUp.php?UserAlreadyExists=1");

}else{
    addNewUser($myDbConn, $username, $email, $password, $bio);
    mysqli_close($myDbConn);
    header("Location: ../Login.php?AddedUser=1");
}

?>