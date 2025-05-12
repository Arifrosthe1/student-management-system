<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management System (CRUD Project)</a>
    <a class="btn btn-outline-light ms-auto" href="addform.php">Add Student</a>
  </div>
</nav>

<div class="container mt-5">
<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <h2>Student List</h2>
    <br>
    <table class="table table-bordered table-striped border-black">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course Code</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['course_code']; ?></td>
                        
                        
                        <td><a class="btn btn-primary" href="editform.php?id=<?= $row['id']; ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>

    <div class="d-grid gap-2">
    <a class="btn btn-outline-success" href="addform.php">+ Add New Student</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
</div>