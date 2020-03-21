<?php
include_once 'dbh.inc.php';

if(isset($_POST['submit'])){
    $tname=$_POST['submit'];
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $type=mysqli_real_escape_string($conn,$_POST['type']);
    $stype=mysqli_real_escape_string($conn,$_POST['stype']);
    $cost=mysqli_real_escape_string($conn,$_POST['cost']);
    $sql="INSERT INTO cdetails(cname,tname,typeoftest,sampletype,cost) VALUES('$cname','$tname','$type','$stype','$cost')";
    mysqli_query($conn,$sql);
    header("Location:../customerdetails.php?add=success");
    exit();
}