<?php 
include_once 'dbh.inc.php';
session_start();
if(isset($_POST['submit'])){
$cname=$_SESSION['user'];
$tname=mysqli_real_escape_string($conn,$_POST['tname']);
$pin=mysqli_real_escape_string($conn,$_POST['pincode']);
$type=mysqli_real_escape_string($conn,$_POST['types']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);

if(empty($tname)||empty($pin)||empty($type)||empty($date)||empty($mobile)){
    header("Location:../book.php?booking=emptyfield");
    exit();
}
else{
    $sql="INSERT INTO bookings(cname,tname,pincode,mobile,types,date) VALUES('$cname','$tname','$pin','$mobile','$type','$date')";
    $result=mysqli_query($conn,$sql);
    header("Location:../booktechnicians.php?booking=success");
    exit();
}

}
