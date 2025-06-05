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

   <div class="birth-container">
      <div class="form-title">
            <h3 style="font-weight: bold;">Please provide the following information below</h3>      </div>
      <form action="delivery.php" method="post">
         <div class="form-p">
            <p>Purpose of Request</p>
         </div>
         <div class="form-group-purpose">
            <label class="input-label">Your purpose for this request</label>
            <select class="input-value-purpose" id="selectPurpose" name="selectPurpose">
               <option disabled selected>-Select Option-</option>
               <option>Marriage License Application</option>
               <option>Travel Abroad/Visa Application</option>
               <option>Legal Purposes (e.g., court requirements)</option>
               <option>Claiming Benefits (e.g., SSS, GSIS, insurance, death claim)</option>
               <option>Employment Requirement</option>
               <option>Change of Civil Status</option>
               <option>Annulment or Nullity of Marriage</option>
               <option>Immigration/Migration</option>
               <option>Adoption or Child Custody</option>
               <option>Personal Records/Verification</option>
               <option>Bank/Loan Requirement</option>
               <option>Others</option>
            </select>
            <div id="otherPurposeContainer" class="hidden" style="margin-top: 10px;">
                <label class="input-label" for="otherPurpose">Please specify:</label>
                <input class="input-value-purpose" type="text" id="otherPurpose" name="otherPurpose" placeholder="Enter other purpose">
            </div>

         </div>

         <div class="submit-btn-birth">
            <button id="birth-back-btn" type="button" onclick="window.location.href='marriagedate.php'">Back</button>
            <button id="purpose-btn" type="submit">Continue</button>
         </div>
      </form>
   </div>

   <script src="purpose.js"></script>
</body>
</html>
