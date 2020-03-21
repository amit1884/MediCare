<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medicare|Healthcare Logistics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Fontawesome  -->
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<style>


.container2{
  /* border:1px solid #413e66; */
  width: 800px;
  height: 500px;
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  display: inline-flex; 
}
.backbox{  
  border:2px solid #413e66;
  border-radius:20px;
  background-image:url(images/banner3.jpg);
  width: 100%;
  height: 80%;
  position: absolute;
  transform: translate(0,-50%);
  top:50%;
  color:#413e66;
  display: inline-flex;
}

.frontbox{
  background-color: white;
  border:1px solid dodgerblue;
  border-radius: 20px;
  height: 100%;
  width: 50%;
  z-index: 10;
  position: absolute;
  right:0;
  margin-right: 3%;
  margin-left: 3%;
  transition: right .8s ease-in-out;
}

.moving{
  right:45%;
}


.loginMsg .title,
.signupMsg .title{
    color:#000;
  font-weight: 400;
  font-size: 25px;
}

.loginMsg p,
.signupMsg p {
  font-weight: 100;
}

.textcontent{
  color:white;
  margin-top:65px;
  margin-left: 12%;
}

.loginMsg button,
.signupMsg button {
  background-color: dodgerblue;
  border: 1px solid blue;
  border-radius: 10px;
  color:white;
  font-size: 15px;
  box-sizing: content-box;
  font-weight: 300;
  padding:10px;
  margin-top: 20px;
}

/* front box content*/
.login, .signup{
  padding: 20px;
  text-align: center;
}

.login h2,
.signup h2 {
  color: #35B729;
  font-size:22px;
}

.inputbox{
  margin-top:30px; 
}
.login input, 
.signup input {
  display: block;
  width: 100%;
  height: 43px;
  background-color: #f2f2f2;
  border: none;
  padding:15px;
  margin-bottom:20px;
  font-size: 15px;
}

.login button,
.signup button{
  background-color: #35B729;
  border: none;
  color:white;
  font-size: 12px;
  font-weight: 300;
  box-sizing: content-box;
  padding:10px;
  border-radius: 10px;
  width: 60px;
  position: absolute;
  right:30px;
  bottom: 30px;
  cursor: pointer;
}

/* Fade In & Out*/
.login p {
  cursor: pointer;
  color:#404040;
  font-size:15px;
}

.loginMsg, .signupMsg{
  /*opacity: 1;*/
  transition: opacity .8s ease-in-out;
}

.visibility{
  opacity: 0;
}

.hide{
  display: none;
}
body{
    background-image:url(images/banner5.jpg);
    background-size:cover;
    background-repeat:no-repeat;
}
        </style>
	</head>
	<body>
	<div id="page" style="background-image:url(images/banner5.jpg);background-repeat:no-repeat;background-size:cover;overflow-y:hidden; height:120px;boreder-bottom:2px solid #000">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.php" style ="color:#000"><img src ="images\newlogo.png"></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li><a href="managerhome.php" style ="color:#000">Home</a></li>
							<li><a href="managerlogin.php" style ="color:#000">Manager</a></li>
							<li><a href="technicianlogin.php" style ="color:#000">Technician</a></li>
							<li><a href="customerlogin.php" style ="color:#000">Customer</a></li>
							<!-- <li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li> -->
							<li><a href="includes/logout.inc.php" style ="color:#000"></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
    </nav>
</div>
<div class="container2">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title" style ="color:#000">Don't have an account?</p>
          <p style ="color:#000;font-weight:500">Sign up to save all your graph.</p>
          <button id="switch1">Sign Up</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title"style ="color:#000">Have an account?</p>
          <p style ="color:#000;font-weight:500">Log in to see all your collection.</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>LOG IN</h2>
        <form action="includes/technicianlog.inc.php" method ="post">
        <div class="inputbox">
          <input type="text" name="username" placeholder=" Username">
          <input type="password" name="password" placeholder="  PASSWORD">
        </div>
        <p>FORGET PASSWORD?</p>
        <button type ="submit" name ="submit" value ="login">LOG IN</button>
</form>
      </div>

      <div class="signup hide">
        <h2>SIGN UP</h2>
        <form action="includes/technicianreg.inc.php" method ="post">
        <div class="inputbox">
          <input type="text" name="username" placeholder="  Username">
          <input type="text" name="email" placeholder="  E-mail">
          <input type="password" name="password" placeholder="  Password">
          <input type="text" name="address" placeholder="  Address">
          <input type="text" name="timings" placeholder="  Timing">
          <input type="number" name="cnumber" placeholder=" MobileNo.">
        </div>
        <button type ="submit" name ="submit" value ="login">SIGN UP</button>
        </form>
      </div>

    </div>
    <!-- frontbox -->
  </div>
</body>
<script src ="js/jquery.min.js"></script>
<script>
    var $loginMsg = $('.loginMsg'),
  $login = $('.login'),
  $signupMsg = $('.signupMsg'),
  $signup = $('.signup'),
  $frontbox = $('.frontbox');

$('#switch1').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.addClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

$('#switch2').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.removeClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
})

setTimeout(function(){
  $('#switch1').click()
},1000)

setTimeout(function(){
  $('#switch2').click()
},3000)
    </script>
</html>
</body>
</html>