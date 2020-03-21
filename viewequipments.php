<?php
include_once 'includes/dbh.inc.php'; 
include_once 'managerheader.php'
?>
<link rel ="stylesheet" href ="css/style.css">
<div class ="container-fluid">
<div class ="row">
<div class ="col-xs-12"><center><h1 style ="color:#fff;">Equipments</h1></center>
</div>
</div>
</div>
<div class ="container-fluid">
<div class ="row" style ="display:flex;flex-wrap:wrap;">
<?php

$sql="SELECT * FROM equipments";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck<1)
{?>
<center><h3>No Equipments</h3></center>
<?php }
else{
    while($row =mysqli_fetch_assoc($result)){
        $image=$row['image'];
        ?>
    <div class ="col-md-3 col-xs-12">
    <div class="thumbnail" style ="height:300px;"><img src ="upload/<?php echo $image?>" class ="img-responsive"style ="margin:0;width:100%;">
    <div class= "caption"><center><h5><?php echo $row['name']?></h5><center></div>
    </div>
    </div>
<?php
    }
}
?>
</div>
</div>
</body>
</html>