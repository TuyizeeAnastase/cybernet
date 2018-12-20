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
    <title>contact us</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="nav1">
                <h1><a href="index.php">CyberSchool</a></h1>
                <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="services.php">Courses</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li id="active"><a href="about.php">Abouts</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="form">
            <form class="contact-form" action="contactform.php" method="POST">
                Name:</br>
                <input type="text" placeholder="username" id="name" name="Name">
            </br>
            E-mail:</br>
            <input type="text" placeholder="e_mail" id="name" name="E-mail">
        </br>
        Comment:</br>
        <textarea type="comment" placeholder="comment" id="comment" name="comment"></textarea></br>
        <button type="submit" name="submit">Send Mail</button>
        </form>
        </div>
    </br>
        <div id="extra">
            <h1>contact us</h1>
            <p>
                E-mail: tuyizereanastase1@gmail.com</br>
                Phone: 0787499115</br>
                Address:Musanze </br>
            </p>
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