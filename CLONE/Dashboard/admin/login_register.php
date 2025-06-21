<?php
session_start();
require_once 'dbconnection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $conn->query("SELECT username FROM employees WHERE username = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Username is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        $insert = $conn->prepare("INSERT INTO employees (name, username, password, role) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $name, $email, $password, $role);
        $insert->execute();

        if ($insert->affected_rows > 0) {
            $_SESSION['register_success'] = 'Account successfully created!';
            header("Location: admin.php");
            exit();
        } else {
            $_SESSION['register_error'] = 'Error occurred while creating account.';
            $_SESSION['active_form'] = 'register';
        }

        $insert->close();
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM employees WHERE username = '$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            switch ($user['role']) {
                case 'Admin':
                    header("Location: admin.php");
                    break;
                case 'Validate Officer':
                    header("Location: ../employee/verification.php");
                    break;
                case 'Processing Officer':
                    header("Location: ../employee/process.php");
                    break;
                case 'Document Signatory Officer':
                    header("Location: ../employee/signing.php");
                    break;
                case 'Cashier':
                    header("Location: ../employee/Cashier.php");
                    break;
                case 'Releasing Clerk':
                    header("Location: ../employee/releasing.php");
                    break;
                default:
                    header("Location: ../employee/employee.php"); // fallback
                    break;
            }
            exit();
        } else {
            // Password is incorrect
            $_SESSION['login_error'] = 'Incorrect password.';
        }
    } else {
        // Username not found
        $_SESSION['login_error'] = 'Account does not exist.';
    }

    $_SESSION['active_form'] = 'login';
    header("Location: ../../CivilRegistry/index.php");
    exit();
}

