<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['marriageCountry'] = $_POST['marriageCountry'] ?? '';
    $_SESSION['marriageProvince'] = $_POST['marriageProvince'] ?? '';
    $_SESSION['marriageMunicipal'] = $_POST['marriageMunicipal'] ?? '';

    header("location:purpose.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CivilRegistry/style.css">
    <link rel="stylesheet" href="../CivilRegistry/birth-cert.css">
    <link rel="stylesheet" href="marriage.css">
    <link rel="icon" href="../images/android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
     <!----Header----->
    <div class="sticky-header">
    <section class="header">
        <div class="logo">
            <h1><a href="../CivilRegistry/index.php">eSertipiko Marikina</a></h1>
        </div>
        <div class="navigator">
            <nav>
                <ul>
                    <li><a href="../CivilRegistry/check-status.php" class="select">Check Status</a></li>
                    <li><a href="../CivilRegistry/payments.html" class="select">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="../CivilRegistry/birth-cert.html">Birth Certificate</a>
                            <a href="../CivilRegistry/marriage-cert.html">Marriage Certificate</a>
                            <a href="../CivilRegistry/cenomar.html">CENOMAR</a>
                            <a href="../CivilRegistry/death-cert.html">Death Certificate</a>
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
            <h3 style="font-weight: bold;">Please provide the following information below</h3>
        </div>
         <form method="post">
            <div class="form-p">
                <p>Your Place of Marriage</p>
            </div>
             <div class="form-group">
                <label class="input-label">Country</label>
                <input class="input-value" type="text" id="marriage-country" placeholder="Enter Country" name="marriageCountry">
             </div>
            <div class="form-group">
                <label class="input-label">Province</label>
                <input class="input-value" type="text" id="marriage-province" placeholder="Enter Province" name="marriageProvince">
            </div>
            <div class="form-group">
                <label class="input-label">Municipal</label>
                <input class="input-value" type="text" id="marriage-municipal" placeholder="Enter Municipality" name="marriageMunicipal">
            </div>
              <div class="submit-btn-marriagePlace">
                <button id="marriagePlace-back-btn" type="button">Back</button>
                <button id="marriagePlace-submit-btn" type="submit">Continue</button>
            </div>
         </form>
    </div>
    <script src="marriageplace.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>
