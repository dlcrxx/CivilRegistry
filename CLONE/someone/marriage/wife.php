<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['wife-first-name'] = $_POST['wife-first-name'] ?? '';
    $_SESSION['wife-middle-name'] = $_POST['wife-middle-name'] ?? '';
    $_SESSION['wife-last-name'] = $_POST['wife-last-name'] ?? '';

    header("Location: marriagedate.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CivilRegistry/style.css">
    <link rel="stylesheet" href="../../CivilRegistry/birth-cert.css">
    <link rel="stylesheet" href="marriage.css">
    <link rel="icon" href="../../images/android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
    <!----Header----->
    <div class="sticky-header">
    <section class="header">
        <div class="logo">
            <h1><a href="../../CivilRegistry/index.php">eSertipiko Marikina</a></h1>
        </div>
        <div class="navigator">
            <nav>
                <ul>
                    <li><a href="../../CivilRegistry/check-status.php" class="select">Check Status</a></li>
                    <li><a href="../../CivilRegistry/payments.html" class="select">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="../../CivilRegistry/birth-cert.html">Birth Certificate</a>
                            <a href="../../CivilRegistry/marriage-cert.html">Marriage Certificate</a>
                            <a href="../../CivilRegistry/cenomar.html">CENOMAR</a>
                            <a href="../../CivilRegistry/death-cert.html">Death Certificate</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Resources</a>
                         <div class="dropdown-box">
                            <a href="#">News & Announcement</a>
                            <a href="#">Delivery Reminder</a>
                            <a href="#">Contacts</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    </div>

    <div class="birth-container">
        <div class="form-title">
            <h3>Please provide the following information below</h3>
        </div>
        <form method="post" action="">
            <div class="form-p">
                <p>Wife Information</p>
            </div>
            <div class="form-group">
                <label class="input-label" id="spouse-first-name-label">Wife First Name</label>
                <input class="input-value" type="text" id="wife-first-name" placeholder="First name" name="wife-first-name" autocomplete="off"> 
            </div>
             <div class="form-group">
                <label class="input-label" id="spouse-middle-name-label">Wife Middle Name</label>
                <input class="input-value" type="text" id="wife-middle-name" placeholder="Middle name" name="wife-middle-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label" id="spouse-last-name-label">Wife Last Name</label>
                <input class="input-value" type="text" id="wife-last-name" placeholder="Last name" name="wife-last-name" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <button id="wife-back-btn" type="button">Back</button>
                <button id="wife-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='wife.js'></script>
    <script src="../../CivilRegistry/index.js"></script>
</body>
</html>