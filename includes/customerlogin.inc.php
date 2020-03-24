
<?php
session_start();
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($uid)||empty($pwd))
    {
        header("Location: ../customerlogin.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM customer WHERE username = '$uid'";
        $result= mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck <1)
        {
            header("Location: ../customerlogin.php?login=error");
        exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result))
            {
                   $hashedPwdCheck = password_verify($pwd,$row['password']);
                   if($hashedPwdCheck==false)
                   {
                    header("Location: ../customerlogin.php?login=passwordWrong");
                    exit(); 
                   }
                   else if($hashedPwdCheck ==true){
                            $_SESSION['name']=$row['fullname'];
                            $_SESSION['user']=$row['username'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['pin']=$row['pincode'];
                            $_SESSION['address']=$row['location'];
                            $_SESSION['cnumber']=$row['cnumber'];
                            header("Location: ../customerhome.php?login=success");
                            exit(); 
                   }
            }
        }
    }
}
else{
    header("Location: ../customerlogin.php?login=error occured");
    exit(); 
}
?>