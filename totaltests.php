<?php
include_once 'includes/dbh.inc.php';
include_once 'managerheader.php';
?>
<style>
    .form-control{
        height:80px;
    }
    </style>
<link rel ="stylesheet" href ="css/bootstrap.min.css">
<br><br><br><br><br><br><br>
<center><h1>Total Tests Available</h1></center>
    <div class ="container">
        <div class ="row text-center">
            <div class ="col-md-4 col-xs-12"></div>
            <div class ="col-md-4 col-xs-12">
            <form action="totaltestsact.php" method="post">
       <div class ="form-group"> 
       <input type="Date" placeholder="Date" name="date" required="" class ="form-control">
       </div>
     <div class ="form-group"><select  name="types" required class ="form-control">
     <option style="color: white">Select</option>
        <?php
        $sql="SELECT * FROM tests";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck<1)
        {?>
            <option>No Test Available</option>
        <?php
        }
        else{
            while($row=mysqli_fetch_assoc($result)){?>

            <option style ="color:black" value="<?php echo $row['name']?>">
            <?php echo $row['name']?></option>
            <?php
            }
        }
        ?>
        </select>
    </div>
        <div class ="form-group"><input type="submit" value="Submit"name="submit" class ="form-control btn btn-primary"></div>
    </form>

            </div>
        </div>
    </div>
    
</body>
</html>