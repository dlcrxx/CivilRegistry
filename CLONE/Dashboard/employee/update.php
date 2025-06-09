<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $status = $_POST['status'] ?? null;

    if (!$id || !$status) {
        echo json_encode(['success' => false, 'message' => 'Missing parameters']);
        exit;
    }

    foreach ($_SESSION['requests'] as &$request) {
        if ($request['id'] == $id) {
            $request['status'] = $status;
            echo json_encode(['success' => true]);
            exit;
        }
    }

    echo json_encode(['success' => false, 'message' => 'Request not found']);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Invalid request method']);
