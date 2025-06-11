<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CivilRegistry/style.css">
    <link rel="stylesheet" href="../../CivilRegistry/birth-cert.css">
    <link rel="icon" href="android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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

    <div class="review-container">
        <div class="text-review">
                <p>Please review your information</p>
            </div>
        <div class="review-content">
            <div class="personal-info">
                <form action="data-submit.php" method="post">
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
                    <h3>Husband's Information</h3>
                    <p><strong>Husband's First Name:</strong> <?= htmlspecialchars($_SESSION['husband-first-name']) ?></p>
                    <p><strong>Husband's Middle Name:</strong> <?= htmlspecialchars($_SESSION['husband-middle-name']) ?></p>
                    <p><strong>Husband's Last Name:</strong> <?= htmlspecialchars($_SESSION['husband-last-name']) ?></p>
                </div>
                <div class="mother-info">
                    <h3>Spouse's Information</h3>
                    <p><strong>Spouse's First Name:</strong> <?= htmlspecialchars($_SESSION['mother-first-name']) ?></p>
                    <p><strong>Spouse's Middle Name:</strong> <?= htmlspecialchars($_SESSION['mother-middle-name']) ?></p>
                    <p><strong>Spouse's Last Name:</strong> <?= htmlspecialchars($_SESSION['mother-last-name']) ?></p>
                </div>
                <div class="birth-place-info">
                    <h3>Place of Marriage</h3>
                    <p><strong>Country:</strong> <?= htmlspecialchars($_SESSION['birth_country']) ?></p>
                    <p><strong>Province:</strong> <?= htmlspecialchars($_SESSION['birth_province']) ?></p>
                    <p><strong>Municipal:</strong> <?= htmlspecialchars($_SESSION['birth_municipal']) ?></p>
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
                   

                <input type="hidden" name="recipient_name" value="<?= htmlspecialchars($_SESSION['recipient-name']) ?>">
                <input type="hidden" name="type_of_document" value="<?= htmlspecialchars($_SESSION['typeOfcert']) ?>">
                <input type="hidden" name="referenceNum" value="<?= htmlspecialchars($_SESSION['referenceNum']) ?>">

                <div class="buttons">
                    <input type="button" value="Back" id="review-back-btn">
                    <input type="submit" value="Submit" id="submit-review-btn">
                    <input type="button" value="Download" id="download-pdf-btn">
                </div>
            </form>
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
    <script src="index.js"></script>
</body>
</html>
