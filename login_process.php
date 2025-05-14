<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']); // match with MD5 from DB

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    echo "Invalid login!";
}
?>
