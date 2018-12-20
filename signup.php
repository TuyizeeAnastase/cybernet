<?php
    session_start();
    include('config.php');
    $firsname=$lastname=$gender=$country=$password=$password2='';
    if(isset($_POST['signup'])){
        $firsname = getValue('firstname');
        $lastname = getValue('lastname');
        $gender = getValue('gender');
        $country = getValue('country');
        $password = getValue('password');
        $password2 = getValue('password2');

        if(true)
       {
        $query = "INSERT INTO user (firstname,lastname,gender,country,password) VALUES ('$firsname','$lastname','$gender','$country','$password')";
        $result = $connection->query($query);
        if(mysqli_insert_id($connection) > 0){
            header('Location:index.php');
        }
        else{
            die($query);
            $accounterrors = "Some Fields values were not correct";
        }
       }
    }



    function getValue($index){
        $value =$_POST[$index];
        $value = strip_tags($value);
        $value = stripslashes($value);
        global $connection;
        $value = $connection->real_escape_string($value);
        return $value;
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIGN UP</title>
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
            </ul>
        </div>
        <body id="sbody">
            <h2 id="title">sign up</h2></br></br>
           <!-- <img src="man.png" height="90px">-->
            <div id="today">
                <div>
                    <?php
                        if(isset($accounterrors)){
                            echo $accounterrors;
                        }
                    ?>
                </div>
            <form id="signup" action="signup.php" method="post">

                First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname" placeholder=" Enter Firstname" id="sname"></br></br>
                Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" placeholder="Enter Lastname" id="sname"></br></br>
                Select Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="sname" name="gender">
                <option selected disabled>Gender</option>
               <option value="Male">Male</option>
                <option value="Female">Female</option> 
            </select>
        </br></br>
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter password" id="sname"></br></br>
            Re-Enter Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password2" placeholder="re-enter password" id="sname"></br></br>
           Select Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select id="sname" name="country">
                <option selected disabled>choose your country..</option>
                <option value="rd">Rwanada</option>
                <option value="brn">Burundi</option>
                <option value="tzd">Tanzania</option>
                <option value="ug">Uganda</option>
                <option value="ken">Kenya</option>
                <option value="ssudan">South Sudan</option>
                <option value="congo">D.R.C.</option>
                </select>
                </br></br>
                <input type="submit" value="Sign up" id="ssubmit" name="signup"></br></br></br></br></br>
            </form>
            </div>
            <div id="already">
            <a href="#">Already have account</a>
        </div>
    </div>
</div>
</br></br>
<div id="third">
    <div id="third1"><img src="images.jpg"></br>
   <h3>Cyber net Hotspot</h3></br>
   <p> We Provide Hotspot Service to every one in our City </p>
    </div>
    <div id="third1"><img src="images.jpg"></br>
        <h3>Cyber net Hotspot</h3></br>
        <p> We Provide Hotspot Service to every one in our City </p>
         </div>
         <div id="third1"><img src="images.jpg"></br>
            <h3>Cyber net Hotspot</h3></br>
            <p> We Provide Hotspot Service to every one in our City </p>
             </div>
     </div>
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