<?php
session_start();

if (isset($_GET['for'])) {
    $document = $_SESSION['typeOfcert'] ?? '';

    // Redirect based on document type
    switch ($document) {
        case 'Birth Certificate':
            header("Location: birth-certificate.php");
            break;
        case 'Marriage Certificate':
            header("Location: marriage.php");
            break;
        case 'Death Certificate':
            header("Location: death.php");
            break;
        case 'Cenomar':
            header("Location: cenomar.php");
            break;
        default:
            header("Location: choose-type.php");
            break;
    }
    exit();
} else {
    header("Location: choose-type.php");
    exit();
}
