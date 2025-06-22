
<?php

require_once 'bd-connection.php';
// echo '<pre>';

?>
<?php

if($is_connect = true){
  $sql = "SELECT student_portal.*, semester.name as semester_name FROM `student_portal` JOIN semester ON student_portal.semester = semester.id ORDER BY student_portal.id DESC";
  $data = $connect->query($sql);
  $get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
}

// echo "<pre>";
// print_r($get_data);
// echo die();


if($is_connect = true){
  $sql = "SELECT * FROM `gender`";
  $data_gender = $connect->query($sql);
  $get_data_gender = mysqli_fetch_all($data_gender, MYSQLI_ASSOC);
}

?>


<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <h1 class="heading">Student Portal</h1>
    <form action="add_student.php" method="POST" enctype="multipart/form-data">

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="student_name">Student Name</label>
      <input type="text" name="student_name" id="student_name" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="email">Email</label>
      <input type="email" name="email" id="email" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="phone">Phone Number</label>
      <input type="tel" name="phone" id="phone" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="date_of_birth">Date of Birth</label>
      <input type="date" name="date_of_birth" id="date_of_birth" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="gender">Gender</label>
      <select name="gender" id="" class="formbold-form-input" required>
        <?php foreach($get_data_gender as $gender ) :'' ?>
          <option value="<?php echo $gender['id']; ?>"><?php echo $gender['gender']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="address">Address</label>
      <input type="text" name="address" id="address" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="department">Department</label>
      <input type="text" name="department" id="department" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="semester">Semester</label>
      <select name="semester" id="" class="formbold-form-input" required>
        <?php foreach($get_data as $semester ) :'' ?>
          <option value="<?php echo $semester['id']; ?>"><?php echo $semester['Semester']; ?></option>
        <?php endforeach; ?>
      </select>

    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="roll">Roll Number</label>
      <input type="text" name="roll" id="roll" class="formbold-form-input" required />
    </div>

    <div class="formbold-form-title">
      <label class="formbold-form-label" for="student_image">Student Image</label>
      <input type="file" name="student_image" id="student_image" class="formbold-form-input" accept="image/*" required />
    </div>
      <button type="submit" class="formbold-btn">Register Now</button>
    </form>
  </div>
</div>


<link rel="stylesheet" href="style.css"/>