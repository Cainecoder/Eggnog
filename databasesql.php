<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbs = "student";

$con =mysqli_connect($server,$user,$pass,$dbs);

if(!$con){
    die("Connection Failed".mysqli_connect_error());
}



?>