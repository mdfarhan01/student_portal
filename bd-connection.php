<?php

$connect = mysqli_connect("localhost","root", "", "database");


if( $connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
 echo "Connected successfully.";
}  



?>