<?php
    require 'conn.php';

    echo "working";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
   
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="bg">
        <nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark">
        <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register/register.php">Register</a>
                </li>
            </ul>
        </nav>
        <div class="centered">
            <p>  Expert System for Diagnosis and Treatment of Prostate Disease</p>
        </div>

    </div>

    <script src="js/jquery3.3.1.js"></script>
</body>
</html>