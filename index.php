<?php include ('header.php');
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        header('Location:services.php');
    }
?>
    <div id="main-content">
    <h1>Welcome to Cyber School</h1>
    <p><i>cyberSchool The Place To Experience Fast E-learning Services  24/7 Service For Us.</i></p>
    </br>
    <div id="service">
        <h3><a href="service.php"> Check our service</a></h3>
    </div>
</br>
    <div id="login">
        <span class="errors" style="color:red">
            <?php
                if(isset($_SESSION['login-errors']) && !empty($_SESSION['login-errors'])){
                    echo $_SESSION['login-errors'];
                }
            ?>
        </span>
    <form method="post" action="login.php">
         Username:</br>
        <input type="text" name="username" placeholder="enter your username" id="username"></br>
        Password:</br>
        <input type="password" name="password" placeholder="enter your password" id="username"></br></br>
        <input type="submit" value="Login" id="login2" name="login">&nbsp;&nbsp;&nbsp;&nbsp;
        
        <h3>If you haven't account you can sign up <a href="signup.php">Sign up</a></h3>
    </form>
</div>
    </div>
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
