<?php
include 'dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['EmployeeId']) || !isset($_POST['role'])) {
        die('Missing data.');
    }

    $id = intval($_POST['EmployeeId']);
    $newRole = $conn->real_escape_string($_POST['role']);

    // Validate inputs
    if ($id <= 0 || empty($newRole)) {
        die('Invalid input.');
    }

    // Update query
    $update = $conn->query("UPDATE employees SET role = '$newRole' WHERE EmployeeId = $id");

    if ($update) {
        header("Location: admin.php");
        exit;
    } else {
        die("Failed to update role.");
    }
} else {
    die("Invalid request method.");
}
?>
