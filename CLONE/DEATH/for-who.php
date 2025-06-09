<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['For-whom'] = $_POST['For-whom'] ?? '';

    header("location: information.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CivilRegistry/style.css">
    <link rel="icon" href="../images/android-chrome-192x192.png">
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
                        <li><a href="../CivilRegistry/check-status.php">Check Status</a></li>
                        <li><a href="../CivilRegistry/payments.html">Payment Method</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Civil Registry Documents</a>
                            <div class="dropdown-box">
                                <a href="../CivilRegistry/birth-cert.html">Birth Certificate</a>
                                <a href="../CivilRegistry/marriage-cert.html">Marriage Certificate</a>
                                <a href="../CivilRegistry/cenomar.html">CENOMAR</a>
                                <a href="../CivilRegistry/death-cert.html">Death Certificate</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Resources</a>
                            <div class="dropdown-box">
                                <a href="#">News & Announcement</a>
                                <a href="#">Delivery Reminder</a>
                                <a href="#">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>

    <div class="choose-document-type">
        <h3></h3>
        <p>For whom will you process this document?</p>
        <form method="post" id="chooseTypeofDoc">
            <input type="hidden" name="For-whom" id="typeOfcert">

            <div class="document-type">
                <button type="button" id="btn-spouse" onclick="selectType('Spouse', event)">My Spouse</button>
                <button type="button" id="btn-son" onclick="selectType('Son', event)">My Son</button>
                <button type="button" id="btn-daughter" onclick="selectType('Daughter', event)">My Daughter</button>
                <button type="button" id="btn-father" onclick="selectType('Father', event)">My Father</button>
                <button type="button" id="btn-mother" onclick="selectType('Mother', event)">My Mother</button>

            </div>

            <div class="choose-type-submit">
                <button type="button" id="type-back-btn">Back</button>
                <button type="submit" id="choose-type-submit">Continue</button>
            </div>
        </form>
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
    <script src="../CivilRegistry/index.js"></script>
    <script src="for-who.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>