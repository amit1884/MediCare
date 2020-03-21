<?php 
include_once 'managerheader.php';
?>

<link rel ="stylesheet" href ="css/bootstrap.min.css">
<br><br>
<center>
   <div class ="container">
       <div class ="row">
           <div class ="col-md-4 col-xs-12"></div>
           <div class ="col-md-5 col-xs-12">
           <h2><u>Add Equipments here</u></h2>
           <form action="includes/addequipments.inc.php" method="post" enctype="multipart/form-data">
                <div class ="form-group"><lable>Equipment Name :</lable></div>
                <div class ="form-group"><input type="text" name="name" required=""class ="form-control"></div>
                <div class ="form-group">Select Image</div>
                <div class ="form-group"><input type="file" name="image"class ="form-control"></div>
                <div class ="form-group"><input type="submit" value="Add"name="submit"class ="form-control btn btn-primary"></div>
      </form>
           </div>
        </div>
   </div>
       
</body>
</html>