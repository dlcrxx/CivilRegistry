<?php
session_start();

if (isset($_GET['for'])) {
    $_SESSION['for'] = $_GET['for'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
    <!----Header----->
    <div class="sticky-header">
    <section class="header">
        <div class="logo">
            <h1><a href="index.php">eSertipiko Marikina</a></h1>
        </div>
        <div class="navigator">
            <nav>
                <ul>
                    <li><a href="check-status.php" class="select">Check Status</a></li>
                    <li><a href="payment-method.php" class="select">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="#">Birth Certificate</a>
                            <a href="#">Marriage Certificate</a>
                            <a href="#">CENOMAR</a>
                            <a href="#">Death Certificate</a>
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

    <div class="choose-for-type">
        <div class="choose-for-type-title">
            <h3>Choose from below</h3>
            <p>Are you requesting this document for yourself or for someone else?</p>
        </div>
        <div class="someone-self-container">
            <div class="choices-container">
                <a href="process-for.php?for=personal">
                    <img src="../images/personal.png">
                    <h3>Personal</h3>
                </a>
            </div>
            <div class="choices-container">
                <a href="process-for.php?for=someone">
                    <img src="../images/someone.png">
                    <h3>For someone else</h3>
                </a>
            </div>
        </div>
        <div class="btn-return">
            <button id="btn-return">Back</button>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="contact-us">
                <p class="footer-title">Contact us</p>
                <i class="bi bi-envelope"></i>
                <a>esertipiko.marikina@gmail.com</a><br>
                <i class="bi bi-telephone"></i>
                <span>(325) 748-1936</span><br>
                <i class="bi bi-geo-alt"></i>
                <span>Blk 7 Lot 10 Tuazon St. Barangay Sta. Elena, Marikina City</span>
            </div>

            <div class="user-agreement">
                <p class="footer-title">User Agreement</p>
                <p>Terms and Policy</p>
            </div>

            <div class="partnership">
                <p class="footer-title">Authorized Partner by</p>
                <p id="psa">Phillipine Statistics Authority</p>
            </div>
        </div>
        <div class="icon">
            <i class="bi bi-facebook icon-logo"></i>
            <i class="bi bi-twitter-x icon-logo"></i>
        </div>
        <div class="copyright">
            <p>Copyright <i class="bi bi-c-circle"></i> eSertipiko Marikina 2025. All rights reserved.</p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>