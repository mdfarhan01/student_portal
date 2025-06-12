<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
<?php 

require_once './includes/head.php'; // Include head section with CSS and JS links
require_once 'bd-connection.php'; // Include database connection


?>


<?php 

  $is_connect = true;
  if (!$is_connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM `student_portal`";
  $data = $connect->query($sql);
  $get_data = mysqli_fetch_all($data,);
  

  // echo "<pre>";
  // print_r($get_data);



?>

</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3">📚 Student List</h1>
      <a href="create.php" class="btn btn-primary">+ Add New Student</a>
    </div>
    <table class="table table-hover table-bordered bg-white shadow-sm">

      <thead class="table-light text-center">
        <tr>
            <th>Student Id</th>
            <th>Student Image</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>Roll</th>
            <th>Semester</th>
            <th>Actions</th>
        </tr>
      </thead>
      <?php foreach($data as $students) : ?> 
      <tbody class="text-center">
        <tr >
          <td><?php echo $students['id']; ?></td>
          <td class="images"><img src="<?php echo $students['student_image']; ?>"></td>
          <td><?php echo $students['student_name']; ?></td>
          <td><?php echo $students['department']; ?></td>
          <td><?php echo $students['roll']; ?></td>
          <td><?php echo $students['semester']; ?></td>
          <td class="td-hover"> 
            <a href="view.php?id=<?php echo $students['id'];?>" class="btn btn-sm btn-info">View</a>
            <a href="edit.php?id=<?php echo $students['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="delete.php?id=<?php echo $students['id']?>" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>
</body>
</html>