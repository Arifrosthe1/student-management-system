<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form action="insert.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Course Code:</label><br>
        <input type="text" name="course_code" required><br><br>

        <input type="submit" value="Add Student">
    </form>

    <br>
    <a href="index.php">← Back to Student List</a>
</body>
</html>
