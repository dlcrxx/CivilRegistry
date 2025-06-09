<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['referenceNum'] = $_POST['referenceNum'] ?? '';
    $_SESSION['payment'] = $_POST['payment'] ?? '';
    $_SESSION['controlNum'] = $_POST['controlNum'] ?? '';

    header("Location: review.php");
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
     <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "jSlqx2FnCw9rucgTM",
      });
   })();
</script>
</head>
<body>
    <div class="sticky-header">
    <section class="header">
        <div class="logo">
            <h1><a href="../../CivilRegistry/index.php">eSertipiko Marikina</a></h1>
        </div>
        <div class="navigator">
            <nav>
                <ul>
                    <li><a href="../../CivilRegistry/check-status.php">Check Status</a></li>
                    <li><a href="../../CivilRegistry/payments.html">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="../../CivilRegistry/birth-cert.html">Birth Certificate</a>
                            <a href="../../CivilRegistry/marriage-cert.html">Marriage Certificate</a>
                            <a href="../../CivilRegistry/cenomar.html">CENOMAR</a>
                            <a href="../../CivilRegistry/death-cert.html">Death Certificate</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Resources</a>
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
                <p>Payment Type</p>
           </div>

        <div class="form-group-payment-container">
             <div class="form-group-payment" data-type="online">
                <img src="../../images/online-payment.png" alt="Online Payment">
                <h3>Online Payment</h3>
            </div>
            <div class="form-group-payment" data-type="otc">
                <img src="../../images/over-the-counter.png" alt="Over-the-Counter">
                <h3>Over-the-counter</h3>
            </div>
        </div>

        <div id="otcNote" class="payment-note" style="display: none;">
            <p><strong>Note:</strong> You will need the <strong>reference number</strong> sent to your email to pay the bill over-the-counter.</p>
        </div>

        <div class="form-group">
            <label class="input-label">Reference Number</label>
            <input class="input-value" type="text" id="referenceNum" placeholder="Enter your reference number" autocomplete="off" name="referenceNum">
        </div>

        <div class="form-group">
            <label class="input-label">Payment Method</label>
            <select class="input-value" id="selectPayment" name="payment">
                <option selected disabled>Select Payment</option>
            </select>
        </div>

        <div class="form-group" id="controlInputGroup" style="display: none;">
            <label class="input-label" id="inputLabel">Control Number</label>
            <input class="input-value" type="text" id="controlInput" placeholder="Enter number" autocomplete="off" name="controlNum">
        </div>

        <div class="payment-btn-birth">
                <button id="payment-back" type="button">Back</button>
                <button id="payment-birth-btn" type="submit">Continue</button>
        </div>
        </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script> emailAdd = <?= json_encode($_SESSION['email-address']) ?>; </script>
     <script src="payment-method.js"></script>
    <script src="index.js"></script>
</body>
</html>