<?php
    session_start();
    if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About us</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="nav1">
                <h1><a href="index.php">CyberSchool</a></h1>
                <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="services.php">courses</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li id="active"><a href="about.php">Abouts</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
            <div id="about">
                <h1>CyberSchool</h1>
                <p>
                        Cybershool isthe platform where anyone can sign up in order to study online courses
                        at any time he orshe want according to its timetable.
                        CyberSchool offers online courses based on  programming and also the needed updates news for the 
                        benefits of the students they study on this platform.
                        CyberSchool don't offers all the programming languages courses but offers the 
                        fundemental one in this field where the students can teach themselves ather coures.</p>
                       
                        CyberSchool platform weas developed for encouraging the people to study programming and 
                        increase their level of understanding programming courses .
                        programming courses need to do repeatdly for clear mastering it so this platform its his objectives.

            </div>
            <img src="500_F_67224318_5wckPlcA7YQVMwFDhZZgAYMR2In3jJae.jpg" width="400px" height="50%">
            <embed width="530" height="270" src="vrmltut.wrl" type=model/vrml"/>
            <img src="images (1).jpg" width="400px" height="50%"></div>
            
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