<?php

include 'db.php';

// Get data from the form
$id = $_POST['id'] ?? 0;
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$course_code = $_POST['course_code'] ?? '';

// Update query
$sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course_code = '$course_code' WHERE id = $id";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<h2>Record updated successfully.</h2>";
    echo "<br><a href='index.php'>>Go back to Student List<</a>";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
?>