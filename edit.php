<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Book</title>

<?php 
require_once './includes/head.php'; // Include head section with CSS and JS links
require_once 'bd-connection.php'; // Include database connection
?>


<?php 
$id = $_GET['id']; // Get the student ID from the URL parameter
$sql = "SELECT * FROM `student_portal` WHERE id = " . $_GET['id']; // Example student ID from URL parameter
$data = $connect->query($sql);
$get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
$student = $get_data[0]; // Assuming you want to edit the first student's details


// echo "<pre>";
// print_r($student);
// echo "</pre>";


?>



</head>
<body class="bg-light">

  <div class="formbold-form-wrapper">
    <h1 class="heading">Student Portal</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="student_name">Student Id</label>
      <input type="text" name="student"value="<?php echo $student['id'] ?>"class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="student_name">Student Name</label>
      <input type="text" name="student_name" value="<?php echo $student['student_name'] ?>" id="student_name" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="email">Email</label>
      <input type="email" name="email" id="email" value="<?php echo $student['email'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="phone">Phone Number</label>
      <input type="tel" name="phone" id="phone" value="<?php echo $student['phone'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="date_of_birth">Date of Birth</label>
      <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $student['date_of_birth'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="gender">Gender</label>
      <select name="gender" id="gender" value="<?php echo $student['gender'] ?>"  class="formbold-form-input" required>
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="address">Address</label>
      <input type="text" name="address" id="address" value="<?php echo $student['address'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="department">Department</label>
      <input type="text" name="department" id="department" value="<?php echo $student['department'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="semester">Semester</label>
      <input type="text" name="semester" id="semester" value="<?php echo $student['semester'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="roll">Roll Number</label>
      <input type="text" name="roll" id="roll" value="<?php echo $student['roll'] ?>" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="student_image">Student Image</label>
      <input type="file" name="student_image" id="student_image" class="formbold-form-input" accept="image/*" required />
    </div>
      <button type="submit" class="formbold-btn">Update Now</button>
    </form>
  </div>
</div>
</body>
</html>