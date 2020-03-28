<?php include_once 'technicianheader.php'?>;
<br><br>
<br><br><br><br>
<center>
<h1>Welcome <?php echo $_SESSION['name']?>
</h1>
<br><br>
<div class ="status">
<?php

include_once 'includes/dbh.inc.php';
$user=$_SESSION['user'];
$sql="SELECT * FROM technician WHERE username ='$user'";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1)
{
    echo '<h1> No user of specified username</h1>';
}
else{
    while($rows=mysqli_fetch_assoc($result)){
        if($rows['flag']==0)
        { ?>
            <form action ="includes/techstatus.inc.php" method ="POST">
            <button class ="btn btn-lg btn-primary" name ="submit" value="<?php echo $_SESSION['user']?>">Available</button>
            </form>
       <?php  }
       else{ ?>
                <form action ="includes/techstatus.inc.php" method ="POST">
                <button class ="btn btn-lg  btn-warning" name ="submit" value="<?php echo $_SESSION['user']?>">Unavailable</button>
                </form>
       <?php }
    }
}
?>

</div>
</center>
</body>
</html>