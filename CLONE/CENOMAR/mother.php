<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="birth-cert.css">
    <link rel="icon" href="../CivilRegistry/android-chrome-192x192.png">
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
                    <li><a href="../CivilRegistry/payment-method.php" class="select">Payment Method</a></li>
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
            
            <div class="form-group">
            <label class="input-label">Mother's Maiden Name</label><br>
            <label class="input-label">Your Mother's Name</label><br>
            <input class="input-value" type="text" id="mother-first-name" placeholder="First name"><br>
            <label class="input-label">Your Mother's Middle Name</label>
            <input class="input-value" type="text" id="mother-middle-name" placeholder="Middle name">
            <label class="input-label">Your Mother's Last Name</label>
            <input class="input-value" type="text" id="mother-last-name" placeholder="Last name">
         </div>
         <div class="form-group">

         </div>
         <div class="form-group">

         </div>
              <div class="submit-btn-birth">
                <button id="birth-back-btn" type="button" onclick="window.location.href='father.php'">Back</button>
                <button id="birth-btn">Continue</button>
            </div>
        </form>
    </div>
    <script src="mother.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>