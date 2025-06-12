<?php
require_once './bd-connection.php';

$id = $_POST['id']; // Student ID
echo "<pre>";
print_r($id);

if ($connect) {
    $student_name   = $_POST['student_name'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $date_of_birth  = $_POST['date_of_birth'];
    $gender         = $_POST['gender'];
    $address        = $_POST['address'];
    $department     = $_POST['department'];
    $semester       = $_POST['semester'];
    $roll           = $_POST['roll'];
    $student_image  = $_FILES['student_image'];
    $targetFile     = null;

    if (!empty($student_image['name'])) {
        $targetDir     = "images/";
        $fileName      = basename($student_image["name"]);
        $targetFile    = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $check         = getimagesize($student_image["tmp_name"]);

        if ($check === false) {
            die("File is not an image.");
        }

        if ($student_image["size"] > 5 * 1024 * 1024) {
            die("File is too large.");
        }

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Only JPG, JPEG, PNG & GIF files are allowed.");
        }

        if (!move_uploaded_file($student_image["tmp_name"], $targetFile)) {
            die("Sorry, there was an error uploading your file.");
        }
    }

    // Build SQL query
    if ($targetFile) {
        $sql = "UPDATE `student_portal` SET 
            student_name = '$student_name',
            email = '$email',
            phone = '$phone',
            date_of_birth = '$date_of_birth',
            gender = '$gender',
            address = '$address',
            department = '$department',
            semester = '$semester',
            roll = '$roll',
            student_image = '$targetFile'
            WHERE id = $id";
    } else {
        $sql = "UPDATE `student_portal` SET 
            student_name = '$student_name',
            email = '$email',
            phone = '$phone',
            date_of_birth = '$date_of_birth',
            gender = '$gender',
            address = '$address',
            department = '$department',
            semester = '$semester',
            roll = '$roll'
            WHERE id = $id";
    }

    if ($connect->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
