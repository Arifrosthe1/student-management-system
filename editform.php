<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management System (CRUD Project)</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a class="btn btn-outline-light ms-auto" href="index.php">Back to Student List</a>
  </div>
</nav>
<div class="container mt-5">
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
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <h2>Edit Student</h2><br>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        </div>

        <div class="mb-3">
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        </div>

        <div class="mb-3">
        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
        </div>
        
        <div class="mb-3">
        <label>Course Code:</label><br>
        <input type="text" name="course_code" value="<?php echo $row['course_code']; ?>" required><br><br>
        </div>

        <button type="submit" class="btn btn-outline-success">Update Student</button>
    </form>

    <a class="btn btn-primary" href="index.php" role="button">← Back to Student List</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
</div>