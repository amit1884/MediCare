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
            <a href="index.html" >Home</a>
        </li>

        <li>
            <a href="managerlogin.php">Manager</a>
        </li>
        <li>
            <a href="technicianlogin.php" class="active">Technician</a>
        </li>
        <li>
            <a href="customerlogin.php">Customer</a>
        </li>
    </ul>
</nav>
<!-- Login Form -->
<div class="form-div animated bounceInDown">
    <img src="img/user.png">
    <h2>Register Here</h2>
    <form action="includes/technicianreg.inc.php" method="post">
        <input type="text" placeholder="Name" name="username" required>
        <br>
        <input type="password" placeholder="Password" name="password" required>
        <br>
        <input type="email" placeholder="E-mail Id" name="email" required>
        <br>
        <input type="text" placeholder="Location" name="address" required>
        <br>
         <input type="text" placeholder="Available Timings" name="timings" required>
        <br>
        
        <input type="text" placeholder="Contact No" name="cnumber" required>
        <br>
        <br>
        <input type="submit" value="Register"name="submit">
        <br>
        <br>
    </form>
</div>

</body>
</html>