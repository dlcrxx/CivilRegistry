<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['their-mother-marital-status'] = $_POST['their-mother-marital-status'] ?? '';
    $_SESSION['their-mother-first-name'] = $_POST['their-mother-first-name'] ?? '';
    $_SESSION['their-mother-middle-name'] = $_POST['their-mother-middle-name'] ?? '';
    $_SESSION['their-mother-last-name'] = $_POST['their-mother-last-name'] ?? '';

    header("Location: their-birthplace.php");
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
        <form method="post">
            <div class="form-p">
                <p>Mother Information</p>
            </div>
            <div class="form-group-check">
                <label class="input-label">Status</label><br>
                 <div class="marital-status-container">
                    <input type="radio" id="mother-marital-married" name="their-mother-marital-status" value="Married">
                    <label>Married</label><br>
                    <input type="radio" id="mother-marital-single" name="their-mother-marital-status" value="Single">
                    <label>Single</label>
                </div>
            </div>
            <div class="form-group">
                <label class="input-label">Your Mother's First Name</label>
                <input class="input-value" type="text" id="mother-first-name" placeholder="First name" name="their-mother-first-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label">Your Mother's Maiden Middle Name</label>
                <input class="input-value" type="text" id="mother-middle-name" placeholder="Middle name" name="their-mother-middle-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label">Your Mother's Maiden Last Name</label>
                <input class="input-value" type="text" id="mother-last-name" placeholder="Last name" name="their-mother-last-name" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <button id="mother-back-btn" type="button">Back</button>
                <button id="mother-birth-btn">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="mother.js"></script>
    <script src="index.js"></script>
</body>
</html>