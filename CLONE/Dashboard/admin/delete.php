<?php
session_start();
require_once 'dbconnection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize ID to be safe

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM employees WHERE EmployeeId = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Employee deleted successfully.";
    } else {
        $_SESSION['message'] = "Failed to delete employee.";
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "Invalid request.";
}

$conn->close();
header("Location: admin.php");
exit();
?>
