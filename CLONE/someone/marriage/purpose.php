<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $purpose = $_POST['selectPurpose'] ?? '';

    if ($purpose === 'Others') {
        $purpose = $_POST['other-reason'] ?? 'Others';
    }

    $_SESSION['selectPurpose'] = $purpose;

    header("Location: delivery-details.php");
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
                <p>Purpose of Request</p>
            </div>
        
            <div class="form-group-purpose">
                <label class="input-label">Your purpose for this request</label>
                <select class="input-value-purpose" id="selectPurpose" name="selectPurpose">
                        <option value="" disabled selected>-Select Option-</option>
                        <option>Travel/Passport</option>
                        <option>School</option>
                        <option>Local Employment</option>
                        <option>Foreign Employment</option>
                        <option>Marriage</option>
                        <option>Late Registration</option>
                        <option>Loans/Benefits</option>
                        <option>Others</option>
                    </select>
            </div>
             <div class="form-group" id="otherReasonGroup" style="display: none;">
                <label class="input-label" id="name-personal">State your reason</label>
                <input class="input-value" type="text" id="other-reason" name="other-reason" placeholder="Input here" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <button id="purpose-back-btn" type="button">Back</button>
                <button id="purpose-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="purpose.js"></script> 
</body>
</html>