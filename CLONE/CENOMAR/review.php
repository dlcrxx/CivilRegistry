<?php
session_start();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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

    <div class="review-container">
        <div class="text-review">
                <p>Please review your information</p>
            </div>
        <div class="review-content">
            <div class="personal-info">
                <h3>Personal Information</h3>
                <p><strong>Type of Document:</strong> <?= htmlspecialchars( $_SESSION['typeOfcert']) ?></p>
                <p><strong>Sex:</strong> <?= htmlspecialchars($_SESSION['sex']) ?></p>
                <p><strong>First Name:</strong> <?= htmlspecialchars($_SESSION['first-name']) ?></p>
                <p><strong>Middle Name:</strong> <?= htmlspecialchars($_SESSION['middle-name']) ?></p>
                <p><strong>Last Name:</strong> <?= htmlspecialchars($_SESSION['last-name']) ?></p>
                <?php if (strtolower($_SESSION['sex']) === 'female'): ?>
                    <p><strong>Marital Status:</strong> <?= htmlspecialchars($_SESSION['marital-status']) ?></p>
                    <p><strong>Married Last Name:</strong> <?= htmlspecialchars($_SESSION['married-last-name']) ?></p>
                <?php endif; ?>
                <p><strong>Birthday:</strong> <?= htmlspecialchars($_SESSION['birthday']) ?></p>
                <p><strong>Type of ID:</strong> <?= htmlspecialchars($_SESSION['type_Of_Id']) ?></p>
            </div>
            <div class="father-info">
                <h3>Father's Information</h3>
            <?php if (isset($_SESSION['no_father']) && $_SESSION['no_father'] === 'yes'): ?>
                <p><strong>No Father's Name on Certificate:</strong> Yes</p>
            <?php else: ?>
                <p><strong>Father's First Name:</strong> <?= htmlspecialchars($_SESSION['father-first-name']) ?></p>
                <p><strong>Father's Middle Name:</strong> <?= htmlspecialchars($_SESSION['father-middle-name']) ?></p>
                <p><strong>Father's Last Name:</strong> <?= htmlspecialchars($_SESSION['father-last-name']) ?></p>
                <?php endif; ?>
            </div>
            <div class="mother-info">
                <h3>Mother's Information</h3>
                <p><strong>Mother's First Name:</strong> <?= htmlspecialchars($_SESSION['mother-first-name']) ?></p>
                <p><strong>Mother's Maiden Middle Name:</strong> <?= htmlspecialchars($_SESSION['mother-middle-name']) ?></p>
                <p><strong>Mother's Maiden Last Name:</strong> <?= htmlspecialchars($_SESSION['mother-last-name']) ?></p>
            </div>
            <div class="birth-place-info">
                <h3>Birth Place</h3>
                <p><strong>Birth Country:</strong> <?= htmlspecialchars($_SESSION['birth_country']) ?></p>
                <p><strong>Birth Province:</strong> <?= htmlspecialchars($_SESSION['birth_province']) ?></p>
                <p><strong>Birth Municipal:</strong> <?= htmlspecialchars($_SESSION['birth_municipal']) ?></p>
            </div>
            <div class="purpose">
                <h3>Purpose of Request</h3>
                <p><strong>Your Purpose for this Request:</strong> <?= htmlspecialchars($_SESSION['selectPurpose']) ?></p>
            </div>
            <div class="delivery-info">
                <h3>Delivery Information</h3>
                <p><strong>Recipient Name:</strong> <?= htmlspecialchars($_SESSION['recipient-name']) ?></p>
                <p><strong>House Number and Street:</strong> <?= htmlspecialchars($_SESSION['streetAddress']) ?></p>
                <p><strong>Subdivision or Building Name:</strong> <?= htmlspecialchars($_SESSION['subAddress']) ?></p>
                <p><strong>Barangay:</strong> <?= htmlspecialchars($_SESSION['selectBarangay']) ?></p>
                <p><strong>Contact Number:</strong> <?= htmlspecialchars($_SESSION['contact']) ?></p>
                <p><strong>Email Address:</strong> <?= htmlspecialchars($_SESSION['email-address']) ?></p>
                <p><strong>Payment Method:</strong> <?= htmlspecialchars($_SESSION['payment']) ?></p>
                 <p><strong>Control Number:</strong> <?= htmlspecialchars($_SESSION['controlNum']) ?></p>
            </div>
            <div class="buttons">
                <input type="button" value="Back" id="review-back-btn">
                <input type="button" value="Submit" id="submit-review-btn">
                <input type="button" value="Download" id="download-pdf-btn">
            </div>
        </div>
        
    </div>
      <script>
        const typeOfDoc = <?= json_encode($_SESSION['typeOfcert']) ?>;
    const sex = <?= json_encode($_SESSION['sex']) ?>;
    const firstName = <?= json_encode($_SESSION['first-name']) ?>;
    const middleName = <?= json_encode($_SESSION['middle-name']) ?>;
    const lastName = <?= json_encode($_SESSION['last-name']) ?>;
    const maritalStatus = <?= json_encode($_SESSION['marital-status'] ?? '') ?>;
    const marriedLastName = <?= json_encode($_SESSION['married-last-name'] ?? '') ?>;
    const birthday = <?= json_encode($_SESSION['birthday']) ?>;
    const idType = <?= json_encode($_SESSION['type_Of_Id']) ?>;
    
    const noFather = <?= json_encode($_SESSION['no_father'] ?? 'no') ?>;
    const fatherFirst = <?= json_encode($_SESSION['father-first-name'] ?? '') ?>;
    const fatherMiddle = <?= json_encode($_SESSION['father-middle-name'] ?? '') ?>;
    const fatherLast = <?= json_encode($_SESSION['father-last-name'] ?? '') ?>;

    const motherStatus = <?= json_encode($_SESSION['mother-marital-status']) ?>;
    const motherFirst = <?= json_encode($_SESSION['mother-first-name']) ?>;
    const motherMiddle = <?= json_encode($_SESSION['mother-middle-name']) ?>;
    const motherLast = <?= json_encode($_SESSION['mother-last-name']) ?>;

    const birthCountry = <?= json_encode($_SESSION['birth_country']) ?>;
    const birthProvince = <?= json_encode($_SESSION['birth_province']) ?>;
    const birthMunicipal = <?= json_encode($_SESSION['birth_municipal']) ?>;

    const purpose = <?= json_encode($_SESSION['selectPurpose']) ?>;
    const recipientName = <?= json_encode($_SESSION['recipient-name']) ?>;
    const streetAddress = <?= json_encode($_SESSION['streetAddress']) ?>;
    const subAddress = <?= json_encode($_SESSION['subAddress']) ?>;
    const barangay = <?= json_encode($_SESSION['selectBarangay']) ?>;
    const contact = <?= json_encode($_SESSION['contact']) ?>;
    const emailAddress = <?= json_encode($_SESSION['email-address']) ?>;
    const payment = <?= json_encode($_SESSION['payment']) ?>;
    const controlNum = <?= json_encode($_SESSION['controlNum']) ?>;
    </script>
    <script src="review.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>