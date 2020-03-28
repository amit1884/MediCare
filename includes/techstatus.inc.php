<?php
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){


    $user=mysqli_real_escape_string($conn,$_POST['submit']);
    print_r($user);
    $sql="SELECT * FROM technician WHERE username='$user'";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck<1)
    {
        header('Location:../technicianhome.php?status=username missing');
        exit();
    }
    else{
        while($row=mysqli_fetch_assoc($result)){
            $status=$row['flag'];
            if($status==0)
            {
                $query="UPDATE technician SET flag='1' WHERE username='$user'";
                $res=mysqli_query($conn,$query);
                $resultcheck=mysqli_num_rows($res);
                header('Location:../technicianhome.php?status=updateto_1 ');
                exit();
            }
            else{

                $query="UPDATE technician SET flag='0' WHERE username='$user'";
                $res=mysqli_query($conn,$query);
                $resultcheck=mysqli_num_rows($res);
                header('Location:../technicianhome.php?status=updatedto_0');
                exit();
                
            }
        }
    }
}
else{
    header('Location:../technicianhome.php?status=error');
    exit();
}