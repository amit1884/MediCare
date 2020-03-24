<?php
include_once 'includes/dbh.inc.php';
include_once 'customerheader.php';
?>
<link rel ="stylesheet" href ="css/bootstrap.min.css">
<div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-1 col-xs-12"></div>
        <div class ="col-md-4 col-xs-12">
        <center><h2><u>Book Technician</u></h2></center>
    <?php
    $sql="SELECT * FROM technician WHERE username='".$_POST['submit']."'";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck<1){?>
        <h3>No technician of specified name exist</h3>
  <?php  }
        while($row=mysqli_fetch_assoc($result)){?>
            <form action="includes/bookact.inc.php" method="post">
        <input type="text" class ="form-control"placeholder="Name" readonly="" value="<?php echo $row['username']?>" name="tname" required="" autocomplete="off">
        <br>
        <input type="text" class ="form-control"placeholder="Pin" readonly="" value="<?php echo $row['pincode']?>" name="pincode" required="" autocomplete="off">
        <br>
        <select  class ="form-control"name="types" required="">
            <option style="color: white">Select</option>
            <?php 
            
            $query="SELECT * FROM tests";
            $result=mysqli_query($conn,$query);
            $resultcheck=mysqli_num_rows($result);
            if($resultcheck<1){?>
                   <option style="color: white">No tests</option>
           <?php }
            else{
                    while($res=mysqli_fetch_assoc($result)){?>
                         <option style="color: #000" value="<?php echo $res['name']?>"><?php echo $res['name']?></option>
                  <?php  }
            }       
            ?> 
        </select>
           <br>
           <input type="date" class ="form-control"name="date" required="" autocomplete="off">
           <br>
        <input class ="form-control"type="text" placeholder="Contact No" name="mobile" pattern="[789][0-9]{9}" title="Indian Number Only(Max 10 Digit)" autocomplete="off">
        <br>
        <br>
        <input class ="form-control btn btn-primary"type="submit" value="Book"name="submit">
        <br>
    </form>
       <?php }
    ?>
</div>
</div>
</div>
   
</body>
</html>