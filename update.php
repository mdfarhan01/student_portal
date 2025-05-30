<?php


require_once 'bd-connection.php';


?>

<?php


    $student_name = $_POST['student_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $roll = $_POST['roll'];
    $student_image = ($_FILES['student_image']);

if($connect){
    $sql = "UPDATE `student_portal` SET 
            student_name = '$student_name', 
            email = '$email', 
            phone = '$phone', 
            date_of_birth = '$date_of_birth',
            gender = '$gender',
            address = '$address',
            department = '$department',
            semester = '$semester',
            roll = '$roll'";


    if( $connect->query($sql) === true ) {
        echo "Student Updated Successfully";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }

}



?>