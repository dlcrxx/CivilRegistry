<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['their-no_father'] = isset($_POST['their-no_father']) ? 'yes' : 'no';
    $_SESSION['their-father-first-name'] = $_POST['their-father-first-name'] ?? '';
    $_SESSION['their-father-middle-name'] = $_POST['their-father-middle-name'] ?? '';
    $_SESSION['their-father-last-name'] = $_POST['their-father-last-name'] ?? '';

    header("Location: their-mother.php");
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
                <p>Father Information</p>
            </div>
            <div class="form-group-check">
                <input class="input-value-check" type="checkbox" name="their-no_father">
                <label class="input-label">There is no father's name in Birth Certificate</label>
            </div>
            <div class="form-group">
                <label class="input-label">Their Father's Name</label>
                <input class="input-value" type="text" id="father-first-name" placeholder="First name" name="their-father-first-name" autocomplete="off"> 
            </div>
             <div class="form-group">
                <label class="input-label">Their Father's Middle Name</label>
                <input class="input-value" type="text" id="father-middle-name" placeholder="Middle name" name="their-father-middle-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label">Their Father's Last Name</label>
                <input class="input-value" type="text" id="father-last-name" placeholder="Last name" name="their-father-last-name" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <input type="hidden" name="type" id="user-type"/>
                <button id="father-back-btn" type="button">Back</button>
                <button id="father-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='father.js'></script>
    <script src="index.js"></script>
</body>
</html>