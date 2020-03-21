<?php
include_once 'includes/dbh.inc.php';
include_once 'technicianheader.php';
?>
<link rel ="stylesheet" href ="css/bootstrap.min.css">
<!-- Login Form --><br><br><br><br>
   <center><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Customer Details</h2></center>
   <div class ="container">
   <div class ="row">
   <div class ="col-md-4 col-xs-12"></div>
   <div class ="col-md-5">
   <?php
    // print_r($_POST['submit']);
    $sql="SELECT * FROM bookings WHERE cname='".$_POST['submit']."'";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck<1){?>
        <h2>No customer</h2>
   <?php }
   else{
       while($row=mysqli_fetch_assoc($result)){?>
            <form action="includes/adddetailsact.inc.php" method="post">
        <div class ="form-group"><input class ="form-control" type="text" placeholder="Name" readonly="" value="<?php echo $row['cname']?>" name="cname" required="" autocomplete="off">
       </div>     
        <div class ="form-group"><input class ="form-control" type="text" placeholder="Type" readonly="" value="<?php echo $row['types']?>" name="type" required="" autocomplete="off">
        </div>
       <div class ="form-group"><select class ="form-control" name="stype" required="">
            <option value="" style="color: #000">Select</option>
            <option value="Hair" style="color: #000">Hair</option>
            <option value="Blood" style="color: #000">Blood</option>
            <option value="Urine" style="color: #000">Urine</option>
        </select></div>
        <div class ="form-group">  <input type="text"  class ="form-control" placeholder="Cost" name="cost" required="" autocomplete="off"></div>
        <div class ="form-group"> <button type="submit" class ="form-control btn btn-primary" value="<?php echo $_SESSION['user']?>"name ="submit">Submit</button></div>
    </form>
     <?php  }
   }
    ?>
   </div>
   </div>
   </div>
</body>
</html>