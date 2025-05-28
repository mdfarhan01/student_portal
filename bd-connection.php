<?php

$connect = mysqli_connect("localhost","root", "", "database");

$is_connect = false;


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
 


?>