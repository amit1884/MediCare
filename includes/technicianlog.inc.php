
<?php
session_start();
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($uid)||empty($pwd))
    {
        header("Location: ../technicianlogin.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM technician WHERE username = '$uid'";
        $result= mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck <1)
        {
            header("Location: ../technicianlogin.php?login=error");
        exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result))
            {
                   $hashedPwdCheck = password_verify($pwd,$row['password']);
                   if($hashedPwdCheck==false)
                   {
                    header("Location: ../technicianlogin?login=error!!!!!!!!!!");
                    exit(); 
                   }
                   else if($hashedPwdCheck ==true){
                            $_SESSION['user']=$row['username'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['address']=$row['location'];
                            $_SESSION['cnumber']=$row['cnumber'];
                            header("Location: ../technicianhome.php?login=success");
                            exit(); 
                   }
            }
        }
    }
}
else{
    header("Location: ../technicianlogin.php?login=error occured");
    exit(); 
}
?>