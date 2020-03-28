<?php
include_once 'includes/dbh.inc.php'; 
include_once 'managerheader.php'
?>
<style>
figure.snip1321 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 500px;
  width: 100%;
  color: #000000;
  text-align: center;
  -webkit-perspective: 50em;
  perspective: 50em;
}
figure.snip1321 * {
  -webkit-box-sizing: padding-box;
  box-sizing: padding-box;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
figure.snip1321 img {
  width:500px;
  height:300px;
  vertical-align: top;
}
figure.snip1321 figcaption {
  top: 50%;
  left: 20px;
  right: 20px;
  position: absolute;
  opacity: 0;
  z-index: 1;
}
figure.snip1321 h2,
figure.snip1321 h4 {
  margin: 0;
}
figure.snip1321 h2 {
  font-weight: 600;
}
figure.snip1321 h4 {
  font-weight: 400;
  text-transform: uppercase;
}
figure.snip1321 i {
  font-size: 32px;
}
figure.snip1321:after {
  background-color: #ffffff;
  position: absolute;
  content: "";
  display: block;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  -webkit-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  opacity: 0;
}
figure.snip1321 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.snip1321:hover figcaption,
figure.snip1321.hover figcaption {
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
figure.snip1321:hover:after,
figure.snip1321.hover:after {
  -webkit-transform: rotateX(0);
  transform: rotateX(0);
  opacity: 0.9;
}

</style>
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
    <figure class="snip1321"><img src="upload/<?php echo $row['image']?>" alt="sq-sample26"/>
    <figcaption>
    <h3><?php echo $row['name']?></h3>
    <h4>Quantity : <?php echo $row['Quantity']?></h4><br>
    <h4>Price : Rs. <?php echo $row['Price']?></h4>
    </figcaption>
    <a href="#"></a>
    </figure>
    </div>
<?php
    }
}
?>
</div>
</div>
</body>
</html>