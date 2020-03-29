<?php include_once 'managerheader.php';
include_once 'includes/dbh.inc.php';
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
<center>
<h2 style ="color:#fff">Available Technicians</h2>
</center>
<div class ="container-fluid">
<div class ="row">
<div class =" col-xs-12">
<center><table class ="responstable">
<tr>
<th><center>SrNo.</center></th>
<th><center>Name</center></th>
<th><center>Email</center></th>
<th><center>Location</center></th>
<th><center>PinCode</center></th>
<th><center>Number</center></th>
<th><center>Timing</center></th>
<th><center>Status</center></th>
</tr>
<?php 
$i=1;
$sql="SELECT * FROM technician";
$result=mysqli_query($conn,$sql);

$resultcheck=mysqli_num_rows($result);

if($resultcheck<1)
{?>
<h3>No Technician Available</h3>
<?php 
}
else{
    while($row=mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['fullname']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['location']?></td>
        <td><?php echo $row['pincode']?></td>
        <td><?php echo $row['cnumber']?></td>
        <td><?php echo $row['timings']?></td>
        <?php if($row['flag']==0){?>
          <td style ="color:green;">Available</td>
          <?php } else{?>
            <td style ="color:red;">Unavailable</td>
          <?php } ?>
    </tr>
<?php
$i++;
    }
}
?>
</table>
</center>
</div>
</div>
</div>
  
</table>
</body>
</html>