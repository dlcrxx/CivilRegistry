<?php
session_start();
include '../Dashboard/admin/dbconnection.php';

// Generate reference number
$referenceNum = rand(1000000000, 9999999999); // 10-digit number

$recipient = $_SESSION['recipient-name'];
$typeOfCert = $_SESSION['typeOfcert'];
$status = 'Received'; // Initial status
$dateRequested = date("Y-m-d H:i:s");

// Save to database
$stmt = $conn->prepare("INSERT INTO requests (recipient_name, type_of_document, status, reference_number, date_requested) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $recipient, $typeOfCert, $status, $referenceNum, $dateRequested);

if ($stmt->execute()) {
    $_SESSION['controlNum'] = $referenceNum; // Save for later email use
    echo json_encode(['success' => true, 'reference' => $referenceNum]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
