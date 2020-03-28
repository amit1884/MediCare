<?php
include_once 'dbh.inc.php';

if(isset($_POST['submit'])){
 
    $eqname=mysqli_real_escape_string($conn,$_POST['name']);
    $eqqty=mysqli_real_escape_string($conn,$_POST['qty']);
    $eqprice=mysqli_real_escape_string($conn,$_POST['price']);
  $name = $_FILES['image']['name'];
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into equipments(name,image,Quantity,Price) values('".$eqname."','".$name."','".$eqqty."','".$eqprice."')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
     header("Location: ../addequipments.php?upload=success");
     exit();

  }
 
}
?>