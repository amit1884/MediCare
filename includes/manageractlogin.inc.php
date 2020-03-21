
<?php
session_start();
if(isset($_POST['submit']))
{
   // include_once 'dbh.inc.php';
    $uid = $_POST['username'];
    $pwd = $_POST['password'];
    if(empty($uid)||empty($pwd))
    {
        header("Location: ../index.php?login=empty");
        exit();
    }
    else{
        if($uid=='manager'&&$pwd=='manager')
        {
            $_SESSION['user']=$uid;
            header("Location: ../managerhome.php?login=success");
            exit();
        }
    }
}
else{
    header("Location: ../index.php?login=success");
    exit();
}
?>