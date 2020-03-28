<?php

include_once 'includes/dbh.inc.php';

if(isset($_POST['submit']))
{
 $test=mysqli_real_escape_string($conn,$_POST['name']);
 $price=mysqli_real_escape_string($conn,$_POST['price']);
if(empty($test))
{
    header("Location:addtests.php?add=emptyfield");
       exit();
}
else{
    $sql="INSERT INTO tests(name,Price) VALUES('".$test."','".$price."')";
    mysqli_query($conn,$sql);
    header("Location:addtests.php?add=success");
       exit();
}
}
?>
<?php
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

<div class ="container">
<div class ="row text-center">
<div class ="col-md-12 col-xs-12">
<h2><u>ADD TESTS</u></h2>
</div>
</div>
</div>

<div class ="container">
<div class ="row text-center">
<div class ="col-md-3 col-xs-12"></div>
<div class ="col-md-6 col-xs-12">
  
<form action ="addtests.php" method ="post">
<table class ="responstable">
<tr>
<td>Name Of Test :</td>
<td> <input type='text'  name='name'></td>
</tr>
<tr>
<td>Price:</td>
<td><input type='number'  name='price'></td>
</tr>
<tr>
<td colspan="2"> <input class ="form-control btn btn-primary" type='submit' value='Add'name ="submit" /></td>
</tr>
</table>
</form>
</div>
</div>
</div>

</body>
</html>