<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
        header('Location:index.php');
    }
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cyber Net Service</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="nav1">
                <h1><a href="index.php">CyberSchool</a></h1>
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="services.php">courses</a><li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="logout.php">Logout</a></li>
            <li id="active"><a href="about.php">Abouts</a></li>
            </ul>
        </div>
        <div id="internet"></br>
            <div id="child"></br>
                <h3>The cyberschool E-learning courses</h3></br>
                <h3>Students resources $ News</h3>
            </div>
        </div>
        </br>
        <div id="courses">
    <ul>
    <li><a href="#">C </a></li>
    <li><a href="#">C++ </a></li>
    <li><a href="#">Java </a></li>
    <li><a href="#">Android </a></li>
    <li><a href="#">Pyton </a></li>
    </ul>
</div>
 </br>
        <div id="footer">
                <h2>&copy Allrights reserved </h2> 
            <div id="nav2">
                <ul>
            <li><a href="#"><i class="fa fa-facebook" id="icon"></i></a></li>  
            <li><a href="#"><i class="fa fa-twitter" id="icon2"></i></a></li> 
            <li><a href="#"><i class="fa fa-youtube" id="icon3"></i></a></li> 
            <li><a href="#"><i class="fa fa-whatsapp" id="icon4"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" id="icon5"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" id="icon6"></i></a></li>
                </ul>
            </div>
            </div>
            </body>
            </html>