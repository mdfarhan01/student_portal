<!DOCTYPE html>
<html lang="en">
<head>
<?php 

require_once './includes/head.php'; // Include head section with CSS and JS links
require_once 'bd-connection.php'; // Include database connection


?>
</head>

<?php 


$sql = "SELECT * FROM `student_portal`"; // Example book ID
$data =  $connect->query($sql);
$get_data = mysqli_fetch_all($data, MYSQLI_ASSOC);
$result = $get_data[0]; // Assuming you want to view the first book's details

?>

<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 shadow-sm">
      <div class="row">
        <div class="col-md-8">
          <h3><?echo  ;?></h3>
          <p><strong>Author:</strong> Paulo Coelho</p>
          <p><strong>ISBN:</strong> 9780061122415</p>
          <p><strong>Publisher:</strong> HarperOne</p>
          <p><strong>Published Date:</strong> 1988-01-01</p>
          <p><strong>Category:</strong> Fiction</p>
          <p><strong>Language:</strong> English</p>
          <p><strong>Pages:</strong> 208</p>
          <p><strong>Description:</strong> A journey of self-discovery and destiny.</p>
          <a href="index.html" class="btn btn-secondary mt-3">← Back to List</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>