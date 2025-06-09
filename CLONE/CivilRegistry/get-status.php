<?php
session_start();

header('Content-Type: application/json');

$ref = $_POST['reference_number'] ?? '';

if (!$ref) {
    echo json_encode(['success' => false, 'message' => 'Reference number is required']);
    exit;
}

// For testing: sample data (replace with your session or DB data)
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [
        ['id'=>1, 'recipient_name'=>'Juan Dela Cruz', 'type_of_document'=>'Birth Certificate', 'reference_number'=>'ABC123', 'status'=>'Received'],
        ['id'=>2, 'recipient_name'=>'Maria Santos', 'type_of_document'=>'Marriage Certificate', 'reference_number'=>'XYZ789', 'status'=>'Processing'],
    ];
}

$status = null;
foreach ($_SESSION['requests'] as $req) {
    if (strcasecmp($req['reference_number'], $ref) === 0) {
        $status = $req['status'];
        break;
    }
}

if ($status !== null) {
    echo json_encode(['success' => true, 'status' => $status]);
} else {
    echo json_encode(['success' => false, 'message' => 'Reference number not found']);
}

