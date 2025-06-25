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


if($is_connect = true){
  $sql = "SELECT * FROM `semester`";
  $data_semester = $connect->query($sql);
  $get_data_semester = mysqli_fetch_all($data_semester, MYSQLI_ASSOC);
}


if($is_connect = true){
  $sql = "SELECT * FROM `gender`";
  $data_gender = $connect->query($sql);
  $get_data_gender = mysqli_fetch_all($data_gender, MYSQLI_ASSOC);
}



// echo "<pre>";
// print_r($student);
// echo "</pre>";


?>



</head>
<body class="bg-light">

  <div class="formbold-form-wrapper">
    <h1 class="heading">Student Portal</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">


    <input type="hidden" name="id" value="<?php echo $student['id'] ?>" />

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
        <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo date('Y-m-d', strtotime($student['date_of_birth'])); ?>" class="formbold-form-input" required />
       </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="gender">Gender</label>
      <select name="gender" class="formbold-form-input" required>
        <?php foreach($get_data_gender as $gender): ?>
          <option value="<?php echo $gender['id']; ?>" <?php echo $gender['id'] == $student['gender'] ? 'selected' : ''; ?>>
            <?php echo $gender['gender']; ?>
          </option>
        <?php endforeach; ?>
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
      <select name="semester" class="formbold-form-input" required>
        <?php foreach($get_data_semester as $semester): ?>
          <option value="<?php echo $semester['id']; ?>" <?php echo $semester['id'] == $student['semester'] ? 'selected' : ''; ?>>
            <?php echo $semester['name']; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="roll">Roll Number</label>
      <input type="text" name="roll" id="roll" value="<?php echo $student['roll'] ?>" class="formbold-form-input" required />
    </div>


      <div class="formbold-form-title">
        <label class="formbold-form-label" for="student_image">Student Image</label>
        <!-- Show current image preview -->
        <div style="margin-bottom:10px;">
          <img id="imagePreview" src="<?php echo $student['student_image']; ?>" alt="Current Image" width="150">
        </div>
        <input type="file" name="student_image" id="student_image" class="formbold-form-input" accept="image/*" onchange="previewImage(event)" />
      </div>

      <button type="submit" class="formbold-btn">Update Now</button>
      <a href="index.php" class="btn btn-primary mx-1">← Back to List</a>
    </form>
  </div>
</div>
</body>
</html>



<script>
  function previewImage(event) {
    const image = document.getElementById('imagePreview');
    image.src = URL.createObjectURL(event.target.files[0]);
  }
</script>