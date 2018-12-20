<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'cybernet';
    $connection  = new mysqli($hostname,$username,$password,$databasename);
    if($connection->connect_error) die($connection->connect_error);

?>