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
    $timing = mysqli_real_escape_string($conn,$_POST['timings']);
    $cnumber = mysqli_real_escape_string($conn,$_POST['cnumber']);
    if(empty($name)||empty($username)||empty($password)||empty($email)||empty($address)||empty($pincode)||empty($timing)||empty($cnumber))
    {
        header("Location: ../technicianlogin.php?signup=empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[a-zA-Z]*$/",$address))
        {
            header("Location: ../technicianlogin.php?signup=invalid");
            exit();
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../technicianreg.php?signup=invalid");
                exit();
            }
            else{
              $sql = "SELECT*FROM technician WHERE username = '$username'";
              $result = mysqli_query($conn,$sql);
              $resultcheck = mysqli_num_rows($result);
              if($resulcheck>0)
              {
                header("Location: ../technicianlogin.php?signup=usertaken");
                exit();
              }
              else
              {
                  $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
                  $sql= "INSERT INTO technician (fullname,username,password,email,location,pincode,cnumber,timings) VALUES ('$name','$username','$hashedpwd','$email','$address','$pincode','$cnumber','$timing');";
                  $result=mysqli_query($conn,$sql);
                  header("Location: ../technicianlogin.php?signup=succes");
                  exit();
              }

                
            }
        }

    }
    
}
else{
    header("Location: ../technicianlogin.php?signup=error_occurred");
    exit();
}
?>