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
<link rel ="stylesheet" href ="css/bootstrap.min.css">
<br><br>
   <div class ="container">
       <div class ="row">
           <div class ="col-md-4 col-xs-12"></div>
           <div class ="col-md-5 col-xs-12 text-center">
           <h2><u>Add Equipments here</u></h2><br>
           <form action="includes/addequipments.inc.php" method="post" enctype="multipart/form-data">
                <table class ="responstable">
                <tr>
                <td>Equipment Name</td>
                <td><input type="text" name="name" required=""class ="form-control" autocomplete="off"></div></td>
                </tr>
                <tr>
                <td>Quantity</td>
                <td><input type="text" name="qty"class ="form-control"></td>
                </tr>
                <tr>
                <td>Price</td>
                <td><input type="text" name="price"class ="form-control"></td>
                </tr>
                <tr>
                <td>Image</td>
                <td><input type="file" name="image"class ="form-control"></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" value="Add"name="submit"class ="form-control btn btn-primary"></td>
                </tr>
                </table>
      </form>
           </div>
        </div>
   </div>
       
</body>
</html>