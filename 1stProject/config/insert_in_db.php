<?php
include_once 'db_conn.php';
$id = $_POST['idd'];
$name = $_POST['namee'];
$address = $_POST['addresss'];
$phone = $_POST['phonee'];
$email = $_POST['emaill'];
$qualifications = $_POST['qualificationn'];
$experience = $_POST['experiencee'];
$about = $_POST['aboutt'];

$insertsql ="INSERT INTO `student`(`USERID`, `Name`, `Address`, `Phone`, `Email`, `Qualification`, `Experience`, `About`) VALUES ('$id','$name','$phone','$address','$email','$qualifications','$experience','$about');";

mysqli_query($conn, $insertsql);
header("Location: ../blog.php");

?>


<?php
include_once 'db_conn.php';
$id = $_POST['iddd'];
$name = $_POST['nameed'];
$address = $_POST['addresssd'];
$phone = $_POST['phoneed'];
$email = $_POST['emailld'];
$qualifications = $_POST['qualificationnd'];
$experience = $_POST['experienceed'];
$about = $_POST['abouttd'];

$insertsqll ="INSERT INTO `teacher`(`USERID`, `Name`, `Address`, `Phone`, `Email`, `Qualification`, `Experience`, `About`) VALUES ('$id','$name','$phone','$address','$email','$qualifications','$experience','$about');";

mysqli_query($connect, $insertsqll);
header("Location: ../blog.php");

?>