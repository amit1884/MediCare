<?php 
include_once 'dbh.inc.php';
session_start();
if(isset($_POST['submit'])){
$cname=$_SESSION['user'];
$tname=mysqli_real_escape_string($conn,$_POST['tname']);
$add=mysqli_real_escape_string($conn,$_POST['location']);
$type=mysqli_real_escape_string($conn,$_POST['types']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);

if(empty($tname)||empty($add)||empty($type)||empty($date)||empty($mobile)){
    header("Location:../book.php?booking=emptyfield");
    exit();
}
else{
    $sql="INSERT INTO bookings(cname,tname,location,mobile,types,date) VALUES('$cname','$tname','$add','$mobile','$type','$date')";
    $result=mysqli_query($conn,$sql);
    header("Location:../booktechnicians.php?booking=success");
    exit();
}

}
