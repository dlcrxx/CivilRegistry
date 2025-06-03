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
                <p>Personal Information</p>
            </div>
            <div class="form-group-sex">
                <label class="input-label-sex">Sex</label><br>
                <div class="sex-container">
                    <input type="radio" id="sex-male" name="sex" value="male">
                    <label>Male</label><br>
                    <input type="radio" id="sex-female" name="sex" value="female">
                    <label>Female</label>
                </div>
            </div>
            <div class="form-group-check-personal" id="civil-status-personal" style="display: none;">
                <label class="input-label">Your civil status</label><br>
                 <div class="marital-status-container">
                    <input type="radio" id="status-married" name="marital-status" value="married">
                    <label>Married</label><br>
                    <input type="radio" id="status-single" name="marital-status" value="single">
                    <label>Single</label>
                </div>
            </div>
            <div class="form-group">
                <label class="input-label" id="name-personal">Your First Name</label>
                <input class="input-value" type="text" id="first-name" placeholder="First name">
            </div>
            <div class="form-group">
                <label class="input-label" id="middle-name-personal">Your Middle Name</label>
                <input class="input-value" type="text" id="middle-name" placeholder="Middle name">
            </div>
            <div class="form-group">
                <label class="input-label" id="last-name-personal">Your Last Name</label>
                <input class="input-value" type="text" id="lastt-name" placeholder="Last name">
            </div>
            <div class="form-group">
                <label class="input-label">Your Birthday</label>
                <input class="input-value" type="date" id="birthday">
            </div>
             <div class="form-group">
                <label class="input-label" id="citizenship">Your Citizenship</label>
                <input class="input-value" type="text" id="citizenship" placeholder="Citizenship">
            </div>
             <div class="form-group">
                <label class="input-label">Your ID Type</label>
              <select class="input-value" id="selectIDType">
                    <option disabled selected>--Select Type of ID--</option>
                    <!-- Filipino Citizens -->
                    <option>Philippine Identification System (Philsys)</option>
                    <option>Philippine Passport issued by Department of Foreign Affairs (DFA)</option>
                    <option>Driver's License issued by Land Transportation Office (LTO)</option>
                    <option>Integrated Bar of the Philippine (IBP) ID</option>
                    <option>Government Service Insurance System (GSIS) ID</option>
                    <option>Social Security System (SSS) ID</option>
                    <option>Voter's ID issued by Commission of Election (COMELEC)</option>
                    <option>Professional Regulation Commission (PRC) ID</option>

                    <!-- Non-Filipino Citizens -->
                    <option>Foreign Passport</option>
                    <option>Alien Certificate of Registration (ACR I-Card)</option>
                    <option>Embassy-Issued ID or Certification</option>
                    <option>Foreign Driver’s License</option>
                    <option>Residence Card / National ID (from country of origin)</option>
                    <option>Work Visa / Special Resident Retiree’s Visa (SRRV)</option>
                </select>
            </div>

            <div class="submit-btn-birth">
                <button id="birth-back-btn" type="button">Back</button>
                <button id="birth-btn" type="button">Continue</button>
            </div>

        </form>
    </div>
    <script src="ceno-personalinfo.js"></script>
    <script src="../CivilRegistry/index.js"></script>
</body>
</html>