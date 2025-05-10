<?php

include 'db.php';

// Get ID from URL
$id = $_GET['id'] ?? 0;

// Fetch data
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Student not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
        <label>Course Code:</label><br>
        <input type="text" name="course_code" value="<?php echo $row['course_code']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">← Back to Student List</a>
</body>
</html>