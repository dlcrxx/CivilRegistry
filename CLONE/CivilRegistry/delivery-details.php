<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['recipient-name'] = $_POST['recipient-name'] ?? '';
    $_SESSION['streetAddress'] = $_POST['streetAddress'] ?? '';
    $_SESSION['subAddress'] = $_POST['subAddress'] ?? '';
    $_SESSION['selectBarangay'] = $_POST['selectBarangay'] ?? '';
    $_SESSION['contact'] = $_POST['contact'] ?? '';
    $_SESSION['email-address'] = $_POST['email-address'] ?? '';
    $_SESSION['payment'] = $_POST['payment'] ?? '';
    $_SESSION['controlNum'] = $_POST['controlNum'] ?? '';

    header("Location: payment-method.php");
    exit();
}

$recipientName = trim(
    ($_SESSION['first-name'] ?? '') . ' ' .
    ($_SESSION['middle-name'] ?? '') . ' ' .
    ($_SESSION['last-name'] ?? '')
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="birth-cert.css">
    <link rel="icon" href="../images/android-chrome-192x192.png">
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
                    <li><a href="payments.html" class="select">Payment Method</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Civil Registry Documents</a>
                        <div class="dropdown-box">
                            <a href="birth-cert.html">Birth Certificate</a>
                            <a href="marriage-cert.html">Marriage Certificate</a>
                            <a href="cenomar.html">CENOMAR</a>
                            <a href="death-cert.html">Death Certificate</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" class="select">Resources</a>
                         <div class="dropdown-box">
                            <a href="update.html">News & Announcement</a>
                            <a href="delivery.html">Delivery Reminder</a>
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
                <p>Delivery Information</p>
            </div>

            <div class="form-group">
                <label class="input-label" id="name-recipient">Recipient</label>
                <input class="input-value" type="text" id="recipient-name" placeholder="Full Name" value="<?php echo htmlspecialchars($recipientName); ?>" name="recipient-name" autocomplete="off" readonly>
            </div>
            <div class="form-group">
                <label class="input-label" id="house-number-street-label">House Number and Street</label>
                <input class="input-value" type="text" id="house-number-label" placeholder="Ex. 22 Austin Street" name="streetAddress" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label" id="subdi-bldg-label">Subdivision or Building Name</label>
                <input class="input-value" type="text" id="subdi-bldg-value" placeholder="Ex. Harvester Building" name="subAddress" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label class="input-label">Barangay</label>
                <select class="input-value" id="selectBarangay" name="selectBarangay">
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
                    <option selected disabled><strong>DISTICT 2</strong></option>
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
                <input class="input-value" type="tel" id="contact-value" placeholder="Contact Number" name="contact" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label">Email Address</label>
                <input class="input-value" type="text" id="email-address" placeholder="Email Address" name="email-address" autocomplete="off">
            </div>

            <div class="submit-btn-birth">
                <button id="delivery-back" type="button">Back</button>
                <button id="delivery-birth-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="delivery.js"></script> 
    <script src="index.js"></script>
</body>
</html>