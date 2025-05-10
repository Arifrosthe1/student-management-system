<?php

include 'db.php';
$id = $_GET['id'] ?? '';

if ($id) {
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h2>Record deleted successfully.</h2>";
        echo "<br><a href='index.php'>Go back to Student List</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid ID.";
}

// Close the connection
$conn->close();
?>