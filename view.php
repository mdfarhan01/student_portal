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
$sql = "SELECT student_portal.*, 
               semester.name AS semester_name, 
               gender.gender AS gender_name 
        FROM student_portal 
        JOIN semester ON student_portal.semester = semester.id 
        JOIN gender ON student_portal.gender = gender.id 
        WHERE student_portal.id = $id";

$data = $connect->query($sql);
$get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
$student = $get_data[0];


// echo "<pre>";
// print_r($studnets);

?>

<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 shadow-sm">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo $student['student_image']; ?>" alt="img" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h3>Student Portal</h3>
          <p><strong>Student ID:</strong> <?php echo $student['id']; ?></p>
          <p><strong>Student Name:</strong> <?php echo $student['student_name']; ?></p>
          <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
          <p><strong>Phone Number:</strong> <?php echo $student['phone']; ?></p>
          <p><strong>Date of Birth:</strong> <?php echo $student['date_of_birth']; ?></p>
          <p><strong>Gender:</strong> <?php echo $student['gender_name']; ?></p>
          <p><strong>Address:</strong> <?php echo $student['address']; ?></p>
          <p><strong>Department:</strong> <?php echo $student['department']; ?></p>
          <p><strong>Semester:</strong> <?php echo $student['semester_name']; ?></p>
          <p><strong>Roll Number:</strong> <?php echo $student['roll']; ?></p>
          <a href="index.php" class="btn btn-secondary mt-3">← Back to List</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>