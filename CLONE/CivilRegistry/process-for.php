<?php
session_start();

if (isset($_GET['for'])) {
    $_SESSION['for'] = $_GET['for'];
    $document = $_SESSION['typeOfcert'] ?? '';

    if($_SESSION['for'] === 'personal'){
        switch ($document) {
        case 'Birth Certificate':
            header("Location: birth-certificate.php");
            break;
        case 'Marriage Certificate':
            header("Location: ../MARRIAGE/personal-info.php");
            break;
        case 'Death Certificate':
            header("Location: death.php");
            break;
        case 'Cenomar':
            header("Location: ../CENOMAR/personalinfo.php");
            break;
        default:
            header("Location: choose-type.php");
            break;
        }
            exit();
    }else if($_SESSION['for'] ==='someone'){
        switch ($document) {
        case 'Birth Certificate':
            header("Location: ../someone/birth-cert/your-information.php");
            break;
        case 'Marriage Certificate':
            header("Location: ../someone/marriage/personal-info.php");
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
    }
} else {
    header("Location: choose-type.php");
    exit();
}
