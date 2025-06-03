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
        <form>
            <div class="form-p">
                <p>Delivery Information</p>
            </div>

            <div class="form-group">
                <label class="input-label" id="name-recipient">Recipient</label>
                <input class="input-value" type="text" id="recipient-name" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label class="input-label" id="house-number-street-label">House Number and Street</label>
                <input class="input-value" type="text" id="house-number-label" placeholder="Ex. 22 Austin Street">
            </div>
            <div class="form-group">
                <label class="input-label" id="subdi-bldg-label">Subdivision or Building Name</label>
                <input class="input-value" type="text" id="subdi-bldg-value" placeholder="Ex. Harvester Building">
            </div>
            
            <div class="form-group">
                <label class="input-label">Barangay</label>
                <select class="input-value" id="selectBarangay">
                    <option selected disabled>Select Barangay</option>
                    <option selected disabled>DISTRICT 1</option>
                    <option>Barangka</option>
                    <option>Calumpang</option>
                    <option>Jesus de la Peña</option>
                    <option>Industrial Valley Complex (IVC)</option>
                    <option>Kalumpang</option>
                    <option>Malanday</option>
                    <option>San Roque</option>
                    <option>Sta. Elena</option>
                    <option>Santo Niño</option>
                    <option>Tañong</option>
                    <option selected disabled><strong>--Select Barangay--</strong></option>
                    <option>Concepcion Uno</option>
                    <option>Concepcion Dos</option>
                    <option>Fortune</option>
                    <option>Parang</option>
                    <option>Marikina Heights</option>
                    <option>Nangka</option>
                    <option>Tumana</option>
                </select>
            </div>
            <div class="form-group">
                <label class="input-label">Contact Number</label>
                <input class="input-value" type="tel" id="contact-value" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <label class="input-label">Email Address</label>
                <input class="input-value" type="text" id="email-address" placeholder="Email Address">
            </div>
             

            <div class="submit-btn-birth">
                <button id="birth-back-btn" type="button" onclick="window.location.href='purpose-req.php'">Back</button>
                <button id="birth-btn" type="button">Continue</button>
            </div>
        </form>
    </div>
    <script src="delivery-info.js"></script> 
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>