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
        <form action="birth-place.php" method="post">
            <div class="form-p">
                <p>Mother Information</p>
            </div>
            <div class="form-group-check">
                <label class="input-label">Status</label><br>
                 <div class="marital-status-container">
                    <input type="radio" id="mother-marital-married" name="mother-marital-status">
                    <label>Married</label><br>
                    <input type="radio" id="mother-marital-single" name="mother-marital-status">
                    <label>Single</label>
                </div>
            </div>
            <div class="form-group">
                <label class="input-label">Your Mother's First Name</label>
                <input class="input-value" type="text" id="mother-first-name" placeholder="First name" name="mother-first-name" autocomplete="off" required>
            </div>
             <div class="form-group">
                <label class="input-label">Your Mother's Maiden Middle Name</label>
                <input class="input-value" type="text" id="mother-middle-name" placeholder="Middle name" name="mother-middle-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label">Your Mother's Maiden Last Name</label>
                <input class="input-value" type="text" id="mother-last-name" placeholder="Last name" name="mother-last-name" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <button id="mother-back-btn" type="button">Back</button>
                <button id="mother-birth-btn">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="mother.js"></script>
</body>
</html>