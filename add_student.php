<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require_once 'bd-connection.php';
$errors = [];



function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if($connect) {
    $student_name = !empty($_POST['student_name']) ? clean_input($_POST['student_name']) : null;
    $email = !empty($_POST['email']) ? clean_input($_POST['email']) : null;
    $phone = !empty($_POST['phone']) ? clean_input($_POST['phone']) : null;
    $date_of_birth = ($_POST['date_of_birth']);
    $gender = !empty($_POST['gender']) ? clean_input($_POST['gender']) : null;
    $address = !empty($_POST['address']) ? clean_input($_POST['address']) : null;
    $department = !empty($_POST['department']) ? clean_input($_POST['department']) : null;
    $semester = !empty($_POST['semester']) ? clean_input($_POST['semester']) : null;
    $roll = !empty($_POST['roll']) ? clean_input($_POST['roll']) : null;
    $student_image = ($_FILES['student_image']);


    // image upload handling
    $targetFile = null; // Initialize with null

    if (isset($_POST['submit'])) {
        // Target directory to save uploaded images
        $targetDir = "images/";

        // Get original file name and create full path
        $fileName = basename($_FILES["student_image"]["student_image"]);
        $targetFile = $targetDir . $fileName;

        // Get file extension
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["student_image"]["tmp_name"]);
        if ($check === false) {
            die("File is not an image.");
        }

        // Check file size (e.g. 5MB max)
        if ($_FILES["student_image"]["size"] > 5 * 1024 * 1024) {
            die("File is too large.");
        }

        // Allow certain file formats
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Only JPG, JPEG, PNG & GIF files are allowed.");
        }

        // Move file to target directory
        if (move_uploaded_file($_FILES["student_image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



    $is_connect = true;

        $sql = "INSERT INTO `student_portal`(`student_name`, `email`, `phone`, `date_of_birth`, `gender`, `address`, `department`, `semester`, `roll`,`student_image`) VALUES ('$student_name','$email','$phone','$date_of_birth','$gender','$address','$department','$semester','$roll', '$targetFile')";

    if($connect->query($sql) == true){
        echo"New Student Added Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

} else {
    die("Connection failed: " . mysqli_connect_error());
}





if(empty('student_name')) {
    $errors[] = "Student Name is required.";
}
if(empty('email')) {
    $errors[] = "Email is required.";
}

if(empty('phone')) {
    $errors[] = "Phone is required.";
}
if(empty('phone')) {
    $errors[] = "phone is required.";
}


if(empty($student_name)) {
    echo "Input Student Name.";
}
if(empty($email)) {
    echo "Input Email.";
}
if(empty($phone)) {
    echo "Input Phone.";
}
if(empty($date_of_birth)) {
    echo "Input Date of Birth.";
}
if(empty($gender)) {
    echo "Input gender.";
}
if(empty($address)) {
    echo "Input Address.";
}
if(empty($department)) {
    echo "Input Department.";
}
if(empty($semester)) {
    echo "Input Semester.";
}
if(empty($roll)) {
    echo "Input Roll.";
}



if(empty($student_id) && empty($student_name) && empty($email) && empty($phone) && empty($date_of_birth) && empty($gender) && empty($address) && empty($department) && empty($semester) && empty($roll)) {
    exit;
}



// echo "<br>Student ID: $student_id";
// echo "<br>Student Name: $student_name";
// echo "<br>Email: $email";
// echo "<br>Phone: $phone";
// echo "<br>Date of Birth: $date_of_birth";
// echo "<br>gender: $gender";
// echo "<br>Address: $address";
// echo "<br>Department: $department";
// echo "<br>Semester: $semester";
// echo "<br>Roll: $roll";








?>