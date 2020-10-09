<?php
require_once('config/db_conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `student` WHERE `USERID`='$id'";
if(mysqli_query($conn,$sql)){
    header('Location:../blog.php');
}else{
    echo "can not delete";                          
}
?>