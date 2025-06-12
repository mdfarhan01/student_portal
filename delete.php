
<?php 

require_once './bd-connection.php';

?>


<?php

$id = $_GET['id']; // Get the student ID from the URL parameter
$sql = "SELECT * FROM `student_portal` WHERE id = " . $_GET['id']; // Example student ID from URL parameter
$data = $connect->query($sql);
$get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
$student = $get_data[0]; // Assuming you want to edit the first student's details

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 shadow-sm text-center">
      <h4 class="mb-3 text-danger">Are you sure you want to delete this Student?</h4>
      <p><strong> <?php echo $student['student_name']; ?></strong></p>
      <form>
        <input type="hidden" name="id" value="1">
        <a href="flash.php?id=<?php echo $student['id']?> " class="btn btn-danger">Yes, Delete</a>
        <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
      </form>
    </div>
  </div>
</body>
</html>