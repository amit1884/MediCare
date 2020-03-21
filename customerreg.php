<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Care Logistics</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
 
<body>
<!-- Main Header -->
<header class="main-header">
    <img src="img/logo.png" alt="">
    <h1>Health Care Logistics</h1>
</header>
<!-- Dropdown Navbar -->
<nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="managerlogin.php">Manager</a>
        </li>
        <li>
            <a href="technicianlogin.php">Technician</a>
        </li>
        <li>
            <a href="customerlogin.php" class="active">Customer</a>
        </li>
    </ul>
</nav>
<div class="form-div">
    <h2>Register Here</h2>
    <form action="includes/customerreg.inc.php" method="post">
        <input type="text" placeholder="Name" name="username" required="" autocomplete="off">
        <br>
        <input type="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Enter Valid Password" name="password" required="" autocomplete="off">
        <br>
        <input type="email" placeholder="E-mail Id" name="email" required="" autocomplete="off">
        <br>
        <input type="text" placeholder="Location" name="address" required="" autocomplete="off">
        <br>
        <input type="text" placeholder="Contact No" name="cnumber" pattern="[789][0-9]{9}" title="Indian Number Only(Max 10 Digit)" autocomplete="off">
        <br>
        <br>
        <input type="submit" value="Register" name ="submit">
        <br>
        <br>
    </form>
</div>
<!-- Main Footer -->
<footer class="main-footer">
    <p>Developed & Maintained by
        <a href="https://www.1000projects.com/" target="_blank">
            <i class="fa fa-user-circle"></i> 1000 Projects
        </a>
    </p>
</footer>
</body>
</html>