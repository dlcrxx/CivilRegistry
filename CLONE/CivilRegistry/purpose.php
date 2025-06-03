<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['selectPurpose'] = $_POST['selectPurpose'] ?? '';
    $_SESSION['birth_province'] = $_POST['birth_province'] ?? '';
    $_SESSION['birth_municipal'] = $_POST['birth_municipal'] ?? '';

    header("Location: delivery-details.php");
    exit();
}
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
                    </select>
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