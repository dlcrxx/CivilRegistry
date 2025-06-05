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
                    <li><a href="payment.php" class="select">Payment Method</a></li>
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
            <div style="height: 2px;"></div>

            <div class="form-group">
                <label class="input-label" id="name-personal">Your First Name</label>
                <input class="input-value" type="text" id="first-name" placeholder="First name">
            </div>
            <div style="height: 2px;"></div>

            <div class="form-group">
                <label class="input-label" id="middle-name-personal">Your Middle Name</label>
                <input class="input-value" type="text" id="middle-name" placeholder="Middle name">
            </div>
            <div class="form-group">
                <label class="input-label" id="last-name-personal">Your Last Name</label>
                <input class="input-value" type="text" id="last-name" placeholder="Last name">
            <div style="font-size: 10px;" class="px-1 pl-3 mt-1 mb-3 text-gray-400">
                If your last name starts with "De, Del, De La, or De Los", please make sure to use a space.
                Example: "De Los" instead of "Delos".
                </div>
            </div>

            <div style="height: 20px;"></div>

            <div class="form-group">
                <label class="input-label">Your Birthday</label>
                <input class="input-value" type="date" id="birthday">
            <div style="font-size: 10px;" class="px-1 pl-3 mt-1 mb-3 text-gray-400">
                You must be of legal age to request for PSA Certificates.
            </div>
            </div>

            <div style="height: 8px;"></div>
             
             <div class="form-group">
                <label class="input-label">Your ID Type</label>
              <select class="input-value" id="selectIDType">
                    <option disabled selected>--Select Type of ID--</option>
                    <option>Philippine Identification System (Philsys)</option>
                    <option>Philippine Passport issued by Department of Foreign Affairs (DFA)</option>
                    <option>Driver's License issued by Land Transportation Office (LTO)</option>
                    <option>Integrated Bar of the Philippine (IBP) ID</option>
                    <option>Government Service Insurance System (GSIS) ID</option>
                    <option>Social Security System (SSS) ID</option>
                    <option>Voter's ID issued by Commission of Election (COMELEC)</option>
                    <option>Professional Regulation Commission (PRC) ID</option>
                </select>
                 <div style="font-size: 10px;" class="px-1 pl-3 mt-1 mb-3 text-gray-400">
                    You must present the selected ID upon delivery. Our courier will not release the PSA certificate to anyone else.
            </div>
            </div>
           
            <div style="height: 30px;"></div>

            <div class="submit-btn-birth">
                <button id="birth-back-btn" type="button">Back</button>
                <button id="birth-btn" type="button">Continue</button>
            </div>

        </form>
    </div>
    <script src="namesexid.js"></script>
    <script src="namesexid.js"></script>
</body>
</html>