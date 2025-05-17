<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$errors = [];


function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




$student_id = !empty($_POST['student_id']) ? clean_input($_POST['student_id']) : null;
$student_name = !empty($_POST['student_name']) ? clean_input($_POST['student_name']) : null;
$email = !empty($_POST['email']) ? clean_input($_POST['email']) : null;
$phone = !empty($_POST['phone']) ? clean_input($_POST['phone']) : null;
$date_of_birth = !empty($_POST['date_of_birth']) ? clean_input($_POST['date_of_birth']) : null;
$gender = !empty($_POST['gender']) ? clean_input($_POST['gender']) : null;
$address = !empty($_POST['address']) ? clean_input($_POST['address']) : null;
$department = !empty($_POST['department']) ? clean_input($_POST['department']) : null;
$semester = !empty($_POST['semester']) ? clean_input($_POST['semester']) : null;
$roll = !empty($_POST['roll']) ? clean_input($_POST['roll']) : null;


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



// if($student_id && $student_name && $email && $phone && $date_of_birth && $gender && $address && $department && $semester) {
//     echo "All fields are filled.";
// } else {
//     echo "Please fill all fields.";
// }


if(empty($student_id)) {
    echo "Input Student ID.";
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



echo "<br>Student ID: $student_id";
echo "<br>Student Name: $student_name";
echo "<br>Email: $email";
echo "<br>Phone: $phone";
echo "<br>Date of Birth: $date_of_birth";
echo "<br>gender: $gender";
echo "<br>Address: $address";
echo "<br>Department: $department";
echo "<br>Semester: $semester";
echo "<br>Roll: $roll";








?>