<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $purpose = $_POST['selectPurpose'] ?? '';

    if ($purpose === 'Others') {
        $purpose = $_POST['other-reason'] ?? 'Others';
    }

    $_SESSION['selectPurpose'] = $purpose;

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
   <link rel="icon" href="../CivilRegistry/android-chrome-192x192.png">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
   <!-- Header -->
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
                     <a href="#" class="dropdown-toggle select">Civil Registry Documents</a>
                     <div class="dropdown-box">
                        <a href="../CivilRegistry/birth-cert.html">Birth Certificate</a>
                        <a href="../CivilRegistry/marriage-cert.html">Marriage Certificate</a>
                        <a href="../CivilRegistry/cenomar.html">CENOMAR</a>
                        <a href="../CivilRegistry/death-cert.html">Death Certificate</a>
                     </div>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle select">Resources</a>
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

   <!-- Main Form Section -->
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
            <select  class="input-value-purpose" id="selectPurpose" name="selectPurpose">
               <option value="" disabled selected>-Select Option-</option>
               <option>Marriage Requirement</option>
               <option>Marriage Abroad</option>
               <option>Fiancé/Fiancée Visa Application</option>
               <option>Spousal Visa Application</option>
               <option>Immigration Requirement</option>
               <option>Legal/Court Proceeding</option>
               <option>Annulment or Nullity of Marriage</option>
               <option>Employment Requirement</option>
               <option>Adoption or Child Custody</option>
               <option>Personal Records/Verification</option>
               <option>Others</option>
            </select>
         </div>

         <div class="form-group" id="otherReasonGroup" style="display: none;">
                <label class="input-label" id="name-personal">State your reason</label>
                <input class="input-value" type="text" id="other-reason" name="other-reason" placeholder="Input here" autocomplete="off">
         </div>

         <div class="submit-btn-birth">
            <button id="purpose-back-btn" type="button">Back</button>
            <button id="purpose-btn" type="submit">Continue</button>
         </div>
      </form>
   </div>

   <script src="purpose-req.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="../CivilRegistry/index.js"></script>
</body>
</html>
