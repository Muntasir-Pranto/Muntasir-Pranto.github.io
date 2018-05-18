<?php
$host="localhost";
$user="root";
$password="";
$database="web14.1";
$connection=mysqli_connect($host, $user, $password, $database);

if(!$connection){
    die("Not connected!!");
}

?>