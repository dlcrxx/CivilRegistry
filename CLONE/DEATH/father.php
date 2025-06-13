<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['no_father'] = isset($_POST['no_father']) ? 'yes' : 'no';
    $_SESSION['father-first-name'] = $_POST['father-first-name'] ?? '';
    $_SESSION['father-middle-name'] = $_POST['father-middle-name'] ?? '';
    $_SESSION['father-last-name'] = $_POST['father-last-name'] ?? '';

    header("location: mother.php");
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
            <div class="form-p">
                <p>Father Information</p>
            </div>
            <div class="form-group-check">
                <input class="input-value-check" type="checkbox" name="no_father">
                <label class="input-label">There is no father's name in Birth Certificate</label>
            </div>
            <div class="form-group">
                <label class="input-label">Father's Name</label>
                <input class="input-value" type="text" id="father-first-name" placeholder="First name"
                    name="father-first-name">
            </div>
            <div class="form-group">
                <label class="input-label">Middle Name</label>
                <input class="input-value" type="text" id="father-middle-name" placeholder="Middle name"
                    name="father-middle-name">
            </div>
            <div class="form-group">
                <label class="input-label">Father's Last Name</label>
                <input class="input-value" type="text" id="father-last-name" placeholder="Last name" name="father-last-name">
            </div>
            <div class="submit-btn-birth">
                <button id="father-back-btn" type="button">Back</button>
                <button id="father-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script src='father.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>

</html>