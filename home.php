<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./login.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="parent">
        <div class="app-header">
            <div>Weather</div>
            <div class="logo"><img src="images/weatherlogo.jpg" alt="Logo Icon"><span>Task Tracker</span></div>
            <div>
                <div class="dropdown">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="#">Welcome <?php echo $username;?></a>
                    <!-- <a href="#">Link 2</a> -->
                    <a href="logout.php">Logout</a>
                </div>
                </div>
            </div>

       </div>
        <div class="app-content">
            <div>
                <div class="greet">Good Afternoon</div>
                <div class="time">4:00 </div>
                <div class="date">March 29</div>
                <div class="crypto">CRYPTO</div>
                <div class="button"> <a href="#">Get Started</a></div>
            </div>
        </div>

        </div>


        <h1>Hello</h1>
<div class="first-class">DIV1</div>
<div id="first-id">DIV2</div>
<span>SPAN</span>

<script src="js/jquery.min.js"></script> 
 <script src="js/app.js"></script> 
   
</body>
</html>