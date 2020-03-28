<?php
include_once 'includes/dbh.inc.php';
include_once 'managerheader.php';
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
<div class ="container-fluid">
<div class ="row">
<div class= "col-xs-12">
<center><h1>Available Tests</h1></center>
</div>
</div>
</div><br>
<div class ="container-fluid">
<div class ="row">
<div class ="col-md-3 col-xs-12"></div>
<div class ="col-md-6 col-xs-12">
<table class ="responstable">
<tr>
<th><center>Sr. No.</center></th>
<th><center>Name of Tests</center></th>
<th><center>Price</center></th>
</tr>
<?php
$i=1;
$sql="SELECT * FROM tests";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1)
{?>
<h3>No Tests</h3>
<?php 
}
else{
    while($row=mysqli_fetch_assoc($result))
    {?>
    <tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['Price']?></td>
    </tr>
<?php
$i++;
    }
}
?>
</table></center>
</div>
</div>
</div>
</body>
</html>