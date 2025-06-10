<?php
session_start();

// Ensure session array exists
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [];
}

// Get form data (sanitize properly in real app)
$recipientName = $_POST['recipient_name'] ?? '';
$typeOfDocument = $_POST['type_of_document'] ?? '';
$referenceNum = $_POST['referenceNum'] ?? '';

// Determine the next ID (auto-increment)
$lastId = 0;
if (!empty($_SESSION['requests'])) {
    // Get max current id
    $lastIds = array_column($_SESSION['requests'], 'id');
    $lastId = max($lastIds);
}
$newId = $lastId + 1;

// Create new request array
$newRequest = [
    'id' => $newId,
    'recipient_name' => $recipientName,
    'type_of_document' => $typeOfDocument,
    'reference_number' => $referenceNum,
    'status' => 'Received'
];

// Add new request to session
$_SESSION['requests'][] = $newRequest;

// Redirect to dashboard or confirmation page
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="birth-cert.css">
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
                    <li><a href="payments.html" class="select">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="birth-cert.html">Birth Certificate</a>
                            <a href="marriage-cert.html">Marriage Certificate</a>
                            <a href="cenomar.html">CENOMAR</a>
                            <a href="death-cert.html">Death Certificate</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Resources</a>
                         <div class="dropdown-box">
                            <a href="update.html">News & Announcement</a>
                            <a href="delivery.html">Delivery Reminder</a>
                            <a href="#">Contacts</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    </div>

    <div class="success-container">
        <div class="success-content">
                <h3>You have requested for yor document successfully!</h3>
                <p>Thank you for using eSertipiko Marikina.</p>
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