<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['dateOfMarriage'] = $_POST['dateOfMarriage'] ?? '';

        header("location: marriageplace.php");
        exit();
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
    <link rel="icon" href="../CivilRegistry/android-chrome-192x192.png">
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
                    <li><a href="../CivilRegistry/payment-method.php" class="select">Payment Method</a></li>
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
                <p>Marriage Date</p>
            </div>
            <div class="form-group">
                <label class="input-label">Your Marriage Date</label>
                <input class="input-value" type="date" id="Marriage-Date" placeholder="Marriage Date" name="dateOfMarriage">
            </div>
            
            <div class="submit-btn-marriageDate">
                <button id="marriage-back-btn" type="button">Back</button>
                <button id="marriage-submit-btn" type="submit">Continue</button>
            </div>
         </form>
    </div>
    <script src="marriagedate.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>