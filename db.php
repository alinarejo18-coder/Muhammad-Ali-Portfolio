<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "portfolio_db";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Database Connection Failed");
}

?>