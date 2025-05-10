<?php
include 'db.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

$sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>