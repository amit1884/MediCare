<?php
// session_start();
include_once 'includes/dbh.inc.php';
include_once 'technicianheader.php';
?>
<style>


.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #fff;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167f92;
}
.responstable tr {
  border: 1px solid #d9e4e6;
}
.responstable tr:nth-child(odd) {
  background-color: #eaf3f3;
}
.responstable th {
  display: none;
  border: 1px solid #fff;
  background-color: #167f92;
  color: #fff;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #d9e4e6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #d9e4e6;
  }
}
.responstable th,
.responstable td {
  text-align: left;
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}
h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167f92;
}
</style>
<br>
<center><h2>View Customer Details</h2></center>
<center>
    <table class ="responstable">
        <tr style="color:black">
                  
            <th>Customer Name</th>
             <th>Type of Test</th>            
              <th>Location</th>            
               <th>Contact</th>
                   <th>Date</th>
                <th>Book</th>
        </tr>

        <?php
        // $suser='shiva';
        $suser=$_SESSION['user'];
        $sql="SELECT * FROM bookings WHERE tname='$suser'";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck<1)
        {?>
            <center><h2>No customer</h2></center>
       <?php }
        else{
            while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                    <td><?php echo $row['cname']?></td>
                    <td><?php echo $row['types']?></td>
                    <td><?php echo $row['pincode']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><form action ="adddetails.php" method ="POST">
                    <center><button type ="submit" name ="submit" value ="<?php echo $row['cname']?>" class ="btn btn-success">Confirm Booking</button></center></form></td>
                    </tr>
          <?php  }
        }
        
        ?>
    </table>
</center>
</body>
</html>