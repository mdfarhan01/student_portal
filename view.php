<!DOCTYPE html>
<html lang="en">
<head>
<?php 

require_once './includes/head.php'; // Include head section with CSS and JS links
require_once 'bd-connection.php'; // Include database connection


?>
</head>

<?php 

$id = $_GET['id']; // Get the student ID from the URL parameter
$sql = "SELECT * FROM `student_portal` WHERE id = " . $_GET['id']; // Example student ID from URL parameter
$data =  $connect->query($sql);
$get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
$studnets = $get_data[0]; // Assuming you want to view the first book's details



// echo "<pre>";
// print_r($studnets);

?>

<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 shadow-sm">
      <div class="row">
        <div class="col-md-8">
          <h3>Student Portal</h3>
          <p><strong>Student ID:</strong> <?php echo $studnets['id'];?>  </p>
          <p><strong>Student Name:</strong> <?php echo $studnets['student_name'];?> </p>
          <p><strong>Email: </strong><?php echo $studnets['email'];?> </p>
          <p><strong>Phone Number:</strong> <?php echo  $studnets['phone'];?> </p>
          <p><strong>Date of Birth:</strong> <?php echo $studnets['date_of_birth'];?> </p>
          <p><strong>Gender: </strong> <?php echo $studnets['gender'];?> </p>
          <p><strong>Address: </strong><?php echo $studnets['address'];?> </p>
          <p><strong>Department: </strong> <?php echo $studnets['department'];?> </p>
          <p><strong>Semester: </strong> <?php echo $studnets['semester'];?> </p>
          <p><strong>Roll Number: </strong> <?php echo $studnets['roll'];?> </p>
          <p><strong>Student Image: </strong> </p>
          <a href="index.php" class="btn btn-secondary mt-3">← Back to List</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>