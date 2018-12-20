<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['E-mail'];
    $comment=$_POST['comment'];

    $mailTo="tuyizereanastase1@gmail.com";
    $headers="From:".$mailFrom;
    $txt="you have received an e-mail from".$name."./n/n".$comment;

    mail($mailTo,$comment,$txt,$headers);
    header("Location:services.php");
    
}
?>