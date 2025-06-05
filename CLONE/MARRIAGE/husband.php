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
    <script src="https://cdn.tailwindcss.com"></script>
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
            <h3 style="font-weight: bold;">Please provide the following information below</h3>        </div>
        <form action="wife.php" method="post">
            <div class="form-p">
                <p>Husband Information</p>
            </div>
            
            <div class="form-group">
                <label class="input-label">Your Husband's Name</label>
                <input class="input-value" type="text" id="first-name" placeholder="First name">
            <div style="font-size: 10px;" class="px-1 pl-3 mt-1 mb-3 text-gray-400">
                    If the name has a suffix (i.e. "Jr.", "Sr.", etc), indicate it after the first name. 
                    Use roman numerals like "IV" instead of "FOURTH". Example: "Juan Jr" or "David IV".
            </div>
            </div>
        <div style="height: 20px;"></div>
             <div class="form-group">
                <label class="input-label">Your Husband's Middle Name</label>
                <input class="input-value" type="text" id="first-name" placeholder="Middle name">
            </div>
             <div class="form-group">
                <label class="input-label">Your Husband's Last Name</label>
                <input class="input-value" type="text" id="first-name" placeholder="Last name">
                <div style="font-size: 10px;" class="px-1 pl-3 mt-1 mb-3 text-gray-400">
                   If the last name starts with "De, Del, De La, or De Los", please make sure to use a space. 
                   Example: "De Los" instead of "Delos".
            </div>
            </div>
        <div style="height: 20px;"></div>
              <div class="submit-btn-birth">
                <button id="birth-back-btn" type="button" onclick="window.location.href='namesexid.php'">Back</button>
                <button id="birth-btn">Continue</button>
            </div>
        </form>
    </div>
    <script src="husband.js"></script>
</body>
</html>