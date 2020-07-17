<?php

$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$db = "newmymooddiary";

$con = mysqli_connect($servername, $serverusername, $serverpassword, $db);

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    mysqli_set_charset($con,"utf8");
}

?>