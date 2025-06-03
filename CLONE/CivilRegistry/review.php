<?php
session_start();
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
     <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
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

    <div class="review-container">
        <div class="text-review">
                <p>Please review your information</p>
            </div>
        <div class="review-content">
            <div class="personal-info">
                <h3>Personal Information</h3>
                <p><strong>First Name:</strong> <?= htmlspecialchars($_SESSION['first-name']) ?></p>
                <p><strong>Middle Name:</strong> <?= htmlspecialchars($_SESSION['middle-name']) ?></p>
                <p><strong>Last Name:</strong> <?= htmlspecialchars($_SESSION['last-name']) ?></p>
                <p><strong>Married Last Name:</strong> <?= htmlspecialchars($_SESSION['married-last-name']) ?></p>
                <p><strong>Sex:</strong> <?= htmlspecialchars($_SESSION['sex']) ?></p>
                <p><strong>Marital Status:</strong> <?= htmlspecialchars($_SESSION['marital-status']) ?></p>
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
                <p><strong>Mother's Marital Status:</strong> <?= htmlspecialchars($_SESSION['mother-marital-status']) ?></p>
                <p><strong>Mother's First Name:</strong> <?= htmlspecialchars($_SESSION['mother-first-name']) ?></p>
                <p><strong>Mother's Maiden Middle Name:</strong> <?= htmlspecialchars($_SESSION['mother-middle-name']) ?></p>
                <p><strong>Mother's Maiden Last Name:</strong> <?= htmlspecialchars($_SESSION['mother-last-name']) ?></p>
            </div>
            <div class="birth-place-info">
                <h3>Birth Place</h3>
                <p><strong>Birth Country:</strong> <?= htmlspecialchars($_SESSION['birth_country']) ?></p>
                <p><strong>Birth Province:</strong> <?= htmlspecialchars($_SESSION['birth_province']) ?></p>
                <p><strong>Birth Municipality:</strong> <?= htmlspecialchars($_SESSION['birth_municipal']) ?></p>
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
                <input type="submit" value="Submit" id="submit-review-btn">
            </div>
        </div>
        
    </div>

    <script src="review.js"></script>
    <script src="index.js"></script>
</body>
</html>