<?php
session_start();

$relation = $_SESSION['typeOfcert'] ?? 'Relative';
$fullName = trim(
    ($_SESSION['relative_first_name'] ?? '') . ' ' .
    ($_SESSION['relative_middle_name'] ?? '') . ' ' .
    ($_SESSION['relative_last_name'] ?? '')
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['relative_date_of_death'] = $_POST['date-of-death'] ?? '';

    // Redirect to the next step (e.g., final form or summary)
    header("Location: place-of-death.php");
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
                                    <a href="../CivilRegistry/update.html">News & Announcement</a>
                                    <a href="../CivilRegistry/delivery.html">Delivery Reminder</a>
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
                <div class="form-group">
                    <div class="form-p">
                        <p> Your <?= htmlspecialchars($relation) ?>'s date of death</p>
                    </div>
                    <input class="input-value" type="date" id="date-of-death" name="date-of-death" required
                        placeholder="Enter Date of Death" autocomplete="off"
                        value="<?= htmlspecialchars($_SESSION['relative_date_of_death'] ?? '') ?>">
                </div>
                <div class="submit-btn-birth">
                    <button id="date-back-btn" type="button">Back</button>
                    <button id="date-btn" type="submit">Continue</button>
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
                    <p id="psa">Philippine Statistics Authority</p>
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
        <script src='date.js'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../CivilRegistry/index.js"></script>
    </body>
    </html>