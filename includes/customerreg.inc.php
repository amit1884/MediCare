<?php
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
    $cnumber = mysqli_real_escape_string($conn,$_POST['cnumber']);
    if(empty($username)||empty($name)||empty($pincode)||empty($password)||empty($email)||empty($address)||empty($cnumber))
    {
        header("Location: ../customerlogin.php?signup=empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/",$address))
        {
            header("Location: ../customerlogin.php?signup=invalid");
            exit();
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../customerlogin.php?signup=invalid");
                exit();
            }
            else{
              $sql = "SELECT*FROM customer WHERE username = '$username'";
              $result = mysqli_query($conn,$sql);
              $resultcheck = mysqli_num_rows($result);
              if($resulcheck>0)
              {
                header("Location: ../customerlogin.php?signup=usertaken");
                exit();
              }
              else
              {
                  $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
                  $sql= "INSERT INTO customer (fullname,username,password,email,location,pincode,cnumber) VALUES ('$name','$username','$hashedpwd','$email','$address','$pincode','$cnumber');";
                  $result=mysqli_query($conn,$sql);
                  header("Location: ../customerlogin.php?signup=succes");
                  exit();
              }

                
            }
        }

    }
    
}
else{
    header("Location: ../customerlogin.php?signup=error occurred");
    exit();
}
?>