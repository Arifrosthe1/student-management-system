<?php
include 'db.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$course_code = $_POST['course_code'] ?? '';

$sql = "INSERT INTO students (name, email, phone, course_code) VALUES ('$name', '$email', '$phone', '$course_code')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>