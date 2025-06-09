<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $idToDelete = (int)$_POST['id'];

        if (isset($_SESSION['requests']) && is_array($_SESSION['requests'])) {
            foreach ($_SESSION['requests'] as $index => $request) {
                if ((int)$request['id'] === $idToDelete) {
                    unset($_SESSION['requests'][$index]);
                    // Reindex the array to avoid gaps in numeric keys
                    $_SESSION['requests'] = array_values($_SESSION['requests']);
                    echo json_encode(['success' => true]);
                    exit;
                }
            }
        }
        echo json_encode(['success' => false, 'message' => 'Request not found']);
        exit;
    }
}

echo json_encode(['success' => false, 'message' => 'Invalid request']);
exit;
