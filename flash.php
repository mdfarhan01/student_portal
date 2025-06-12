


<?php 

require_once './bd-connection.php';

?>


<?php
$id = $_GET['id']; // Get the student ID from the URL parameter
$sql = "DELETE FROM `student_portal` WHERE id = $id"; // Example student ID from URL parameter
$data = $connect->query($sql);

header("Location: index.php?message=Student deleted successfully");

?>