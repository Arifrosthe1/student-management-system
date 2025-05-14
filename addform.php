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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <h2>Add New Student <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg></h2><br>
    <form action="insert.php" method="post">
        <div class="mb-3">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        </div>

        <div class="mb-3">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        </div>

        <div class="mb-3">
        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>
        </div>

        <div class="mb-3">
        <label>Course Code:</label><br>
        <input type="text" name="course_code" required><br><br>
        </div>

        <button type="submit" class="btn btn-outline-success">Add Student</button>
    </form>

    <a class="btn btn-primary" href="index.php" role="button">← Back to Student List</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
</div>