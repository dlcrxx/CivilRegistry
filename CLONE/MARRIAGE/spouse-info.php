<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['spouse-first-name'] = $_POST['spouse-first-name'] ?? '';
    $_SESSION['spouse-middle-name'] = $_POST['spouse-middle-name'] ?? '';
    $_SESSION['spouse-last-name'] = $_POST['spouse-last-name'] ?? '';

    header("Location: marriagedate.php");
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
    <link rel="stylesheet" href="marriage.css">
    <link rel="icon" href="android-chrome-192x192.png">
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
        <form method="post" action="">
            <div class="form-p">
                <p id="spouse-information">Husband Information</p>
            </div>
            <div class="form-group">
                <label class="input-label" id="spouse-first-name-label">Your Husband's First Name</label>
                <input class="input-value" type="text" id="spouse-first-name" placeholder="First name" name="spouse-first-name" autocomplete="off"> 
            </div>
             <div class="form-group">
                <label class="input-label" id="spouse-middle-name-label">Your Husband's Middle Name</label>
                <input class="input-value" type="text" id="spouse-middle-name" placeholder="Middle name" name="spouse-middle-name" autocomplete="off">
            </div>
             <div class="form-group">
                <label class="input-label" id="spouse-last-name-label">Your Husband's Last Name</label>
                <input class="input-value" type="text" id="spouse-last-name" placeholder="Last name" name="spouse-last-name" autocomplete="off">
            </div>
              <div class="submit-btn-birth">
                <button id="spouse-back-btn" type="button">Back</button>
                <button id="spouse-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script> const userSex = "<?php echo $_SESSION['sex'] ?? ''; ?>";</script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='spouse.js'></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>