<?php

include_once 'includes/dbh.inc.php';

if(isset($_POST['submit']))
{
 $test=mysqli_real_escape_string($conn,$_POST['name']);
if(empty($test))
{
    header("Location:addtests.php?add=emptyfield");
       exit();
}
else{
    $sql="INSERT INTO tests(name) VALUES('".$test."')";
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

@import 'https://fonts.googleapis.com/css?family=Open+Sans|Quicksand:400,700';

/*--------------------
Text
---------------------*/

h2, h3 {
  font-size: 18px;
	letter-spacing: -1px;
  line-height: 20px;
}

h2 {
	color: #747474;
	text-align: center;
}

h3 {
	color: #032942;
	text-align: right;
}

/*--------------------
Icons
---------------------*/
.i {
  width: 20px;
  height: 20px;
}

.i-login {
  margin: 13px 0px 0px 15px;
  position: relative;
  float: left;
  background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDQxNi4yMjkgNDE2LjIyOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDE2LjIyOSA0MTYuMjI5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQwMy43MjksMjkuNjVINzEuODAyYy02LjkwMywwLTEyLjUsNS41OTctMTIuNSwxMi41djg2LjM2M2MwLDYuOTAzLDUuNTk3LDEyLjUsMTIuNSwxMi41czEyLjUtNS41OTcsMTIuNS0xMi41VjU0LjY1ICAgIGgzMDYuOTI3djMwNi45MjhIODQuMzAydi03My44NjFjMC02LjkwMy01LjU5Ny0xMi41LTEyLjUtMTIuNXMtMTIuNSw1LjU5Ny0xMi41LDEyLjV2ODYuMzYxYzAsNi45MDMsNS41OTcsMTIuNSwxMi41LDEyLjUgICAgaDMzMS45MjdjNi45MDIsMCwxMi41LTUuNTk3LDEyLjUtMTIuNVY0Mi4xNUM0MTYuMjI5LDM1LjI0Nyw0MTAuNjMxLDI5LjY1LDQwMy43MjksMjkuNjV6IiBmaWxsPSIjODczMTRlIi8+CgkJPHBhdGggZD0iTTE4NS40MTcsMjg3LjgxMWMwLDUuMDU3LDMuMDQ1LDkuNjEzLDcuNzE2LDExLjU1YzEuNTQ3LDAuNjQyLDMuMTcsMC45NSw0Ljc4MSwwLjk1YzMuMjUzLDAsNi40NTEtMS4yNyw4Ljg0Mi0zLjY2ICAgIGw3OS42OTctNzkuNjk3YzIuMzQ0LTIuMzQ0LDMuNjYtNS41MjMsMy42Ni04LjgzOWMwLTMuMzE2LTEuMzE2LTYuNDk1LTMuNjYtOC44MzlsLTc5LjY5Ny03OS42OTcgICAgYy0zLjU3NS0zLjU3NS04Ljk1MS00LjY0Ni0xMy42MjMtMi43MWMtNC42NzEsMS45MzYtNy43MTYsNi40OTMtNy43MTYsMTEuNTQ5djY3LjE5N0gxMi41Yy02LjkwMywwLTEyLjUsNS41OTctMTIuNSwxMi41ICAgIGMwLDYuOTAzLDUuNTk3LDEyLjUsMTIuNSwxMi41aDE3Mi45MTdWMjg3LjgxMUwxODUuNDE3LDI4Ny44MTF6IE0yMTAuNDE3LDE1OC41OTRsNDkuNTIxLDQ5LjUybC00OS41MjEsNDkuNTIxVjE1OC41OTR6IiBmaWxsPSIjODczMTRlIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
  background-size: 18px 18px;
  background-repeat: no-repeat;
  background-position: center;
}


/*--------------------
Login Box
---------------------*/

.box {
  width: 500px;
  position: absolute;
  top: 50%;
  left: 55%;
  
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.box-form {
  width: 500px;
  position: relative;
  z-index: 1;
}

.box-login-tab {
	width: 50%;
	height: 40px;
	background: #fdfdfd;
	position: relative;
	float: left;
	z-index: 1;
  
  -webkit-border-radius: 6px 6px 0 0;
     -moz-border-radius: 6px 6px 0 0;
          border-radius: 6px 6px 0 0;
  
	-webkit-transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
	        transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
	-webkit-transform-origin: 0 0;
	        transform-origin: 0 0;
	-webkit-backface-visibility: hidden;
	        backface-visibility: hidden;
	
	-webkit-box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
     -moz-box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
          box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
}

.box-login-title {
	width: 50%;
    height: 40px;
	position: absolute;
	float: left;
	z-index: 2;
}

.box-login {
  position: relative;
  top: -4px;
  width: 400px;
  /* height:400px; */
  background: #fdfdfd;
  text-align: center;
  overflow: hidden;
  z-index: 2;
  
  -webkit-border-top-right-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-bottomleft: 6px;
  -moz-border-radius-bottomright: 6px;
   border-top-right-radius: 6px;
   border-bottom-left-radius: 6px;
   border-bottom-right-radius: 6px;
  
  -webkit-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
     -moz-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
          box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
}

.box-info {
	width: 500px;
	top: 60px;
  position: absolute;
	right: -5px;
	padding: 15px 15px 15px 30px;
	background-color: rgba(255,255,255,0.6);
	border: 1px solid rgba(255,255,255,0.2);
	z-index: 0;
	
	-webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
    
    -webkit-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
    -moz-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
    box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
}

.line-wh {
 	width: 100%;
  height: 1px;
  top: 0px;
  margin: 12px auto;
	position: relative;
	border-top: 1px solid rgba(255,255,255,0.3);
}

/*--------------------
Form
---------------------*/

a { text-decoration: none; }

button:focus { outline:0; }

.b {
	height: 24px;
	line-height: 24px;
	background-color: transparent;
  border: none;
  cursor: pointer;
}

.b-form {
	opacity: 0.5;
	margin: 10px 20px;
  float: right;
}

.b-info {
  opacity: 0.5;
  float: left;
}

.b-form:hover, 
.b-info:hover {
  opacity: 1;
}

.b-support, .b-cta {
	width: 100%;
	padding: 0px 15px;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  letter-spacing: -1px;
  font-size: 16px;
  line-height: 32px;
  cursor: pointer;
    
  -webkit-border-radius: 16px;
     -moz-border-radius: 16px;
          border-radius: 16px;
}

.b-support {
  border: #87314e 1px solid;
  background-color: transparent;
  color: #87314e;
  margin: 6px 0;
}

.b-cta {
  border: #df405a 1px solid;
  background-color: #df405a;
  color: #fff;
}

.b-support:hover, .b-cta:hover {
  color: #fff;
	background-color: #87314e;
	border: #87314e 1px solid;
}

.fieldset-body {
    display: table;
}

.fieldset-body p {
    width: 100%;
    display: inline-table;
    padding: 5px 20px;
    margin-bottom:2px;
}

label {
	float: left;
  width: 100%;
	top: 0px;
	color: #032942;
	font-size: 13px;
	font-weight: 700;
	text-align: left;
	line-height: 1.5;
}

label.checkbox {
	float: left;
  padding: 5px 20px;
	line-height: 1.7;
}

input[type=text],
input[type=password] {
    width: 100%;
    height: 32px;
    padding: 0px 10px;
    background-color: rgba(0,0,0,0.03);
    border: none;
    display: inline;
    color: #303030;
    font-size: 16px;
    font-weight: 400;
    float: left;
    
    -webkit-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
    -moz-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
    box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
}

input[type=text]:focus,
input[type=password]:focus {
    background-color: #f8f8c6;
    outline: none;
}

input[type=submit]  {
  width: 100%;
  height: 48px;
  margin-top: 24px;
  padding: 0px 20px;
  font-family: 'Quicksand', sans-serif;
	font-weight: 700;
	font-size: 18px;
	color: #fff;
  line-height: 40px;
  text-align: center;
  background-color: #87314e;
	border: 1px #87314e solid;
	opacity: 1;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #df405a;
  border: 1px #df405a solid;
}

input[type=submit]:focus {
	outline: none;
}

p.field span.i {
	width: 24px;
  height: 24px;
  float: right;
  position: relative;
  margin-top: -26px;
  right: 2px;
  z-index: 2;
  display: none;
            
  -webkit-animation: bounceIn 0.6s linear;
     -moz-animation: bounceIn 0.6s linear;
  	   -o-animation: bounceIn 0.6s linear;
          animation: bounceIn 0.6s linear;
}

/*--------------------
Transitions
---------------------*/

.box-form, .box-info, .b, .b-support, .b-cta,
input[type=submit], p.field span.i {
    
	-webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
       -o-transition: all 0.3s;
          transition: all 0.3s;
}

/*--------------------
Credits
---------------------*/

.icon-credits {
  width: 100%;
  position: absolute;
  bottom: 4px;
  font-family:'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
  font-size: 12px;
  color: rgba(255,255,255,0.1);
  text-align: center;
  z-index: -1;
}

.icon-credits a {
  text-decoration: none;
  color: rgba(255,255,255,0.2);
}
</style>
<!-- <center>
        <br><br><br><br><br><br>
        <form action="addtests.php" method="post">
          <label for="name"><font color="white">Test Name  :</label>
            <input id="name" name="name" class="text" />
            <br><br>
              <input name="submit" type="submit" value="Add" />
        </form>
    
</center> -->

<div class='box animated zoomIn'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Add Test</h2>
    </div>
    <div class='box-login'>
        <form action ="addtests.php" method ="post">
      <div class='fieldset-body' id='login_form'>
        	<p class='field'>
          <label for='user'>Name of Test</label>
          <input type='text' id='user' name='name' title='Test'/>
          <span id='valida' class='i i-warning'></span>
        </p>
        <input type='submit' id='do_login' value='Add' title='Get Started'name ="submit" />
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>