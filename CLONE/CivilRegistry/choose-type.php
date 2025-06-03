<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="android-chrome-192x192.png">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
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
                    <li><a href="check-status.php">Check Status</a></li>
                    <li><a href="payment-method.php">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Civil Registry Documents</a>
                         <div class="dropdown-box">
                            <a href="#">Birth Certificate</a>
                            <a href="#">Marriage Certificate</a>
                            <a href="#">CENOMAR</a>
                            <a href="#">Death Certificate</a>
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
        <h3>Choose document type</h3>
        <p>What type of document would you like to process?</p>
        <div class="document-type">
            <button id="btn-birth">Birth Certificate</button>
            <button id="btn-marriage">Marriage Certificate</button>
            <button id="btn-death">Death Certificate</button>
            <button id="btn-cenomar">Cenomar</button>
        </div>
        <div class="termsandPolicy">
        <input type="checkbox" id="TermsandPolicy">
            <label>I accept the <a href="#">Terms and Conditions</a>. </label>
        </div>
        <div class="choose-type-submit">
            <button id="type-back-btn">Back</button>
            <button id="choose-type-submit">Continue</button>
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
    <script src="choose-type.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>