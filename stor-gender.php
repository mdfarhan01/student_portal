<?php

require_once 'bd-connection.php';
// echo '<pre>';

?>




<?php 
$gender = $_POST['gender'] ?? '';

// echo "<pre>";
// print_r($_POST);
// echo die();


if($is_connect = true){
    $sql = "INSERT INTO `gender`(`gender`) VALUES ('$gender')";
    if($connect->query($sql) === TRUE){
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>


