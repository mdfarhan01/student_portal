<?php

require_once 'bd-connection.php';
// echo '<pre>';

?>




<?php 
$semester_name = $_POST['semster_name'] ?? '';

// echo "<pre>";
// print_r($_POST);
// echo die();


if($is_connect = true){
    $sql = "INSERT INTO `semester`(`name`) VALUES ('$semester_name')";
    if($connect->query($sql) === TRUE){
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>


