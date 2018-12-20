<?php
    include ('header.php');
    $username = '';
    $password = '';

    if(isset($_POST['login'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = getValue('username');
            $password = getValue('password');

            $userSQl = "SELECT * FROM user WHERE firstname = '$username' AND password = '$password'";
            $users = $connection->query($userSQl);
            if($users->num_rows > 0){
                while($user = $users->fetch_assoc()){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    #$_SESSION['password'] = $user['password'];
                    header('Location:services.php');
                }
            }
            else{
                $loginErrors = "Invalid Username/Password or Both";
                $_SESSION['login-errors'] = $loginErrors;
                header('Location:index.php');
            }
        }
    }
    else{
        die("invalid username or password");
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