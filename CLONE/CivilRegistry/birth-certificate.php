<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['sex'] = $_POST['sex'] ?? '';
    $_SESSION['marital-status'] = $_POST['marital-status'] ?? '';
    $_SESSION['first-name'] = $_POST['first-name'] ?? '';
    $_SESSION['middle-name'] = $_POST['middle-name'] ?? '';
    $_SESSION['last-name'] = $_POST['last-name'] ?? '';
    $_SESSION['married-last-name'] = $_POST['married-last-name'] ?? '';
    $_SESSION['birthday'] = $_POST['birthday'] ?? '';
    $_SESSION['type_Of_Id'] = $_POST['type_Of_Id'] ?? '';

    header("Location: father.php");
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
    <link rel="icon" href="android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
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

    <div class="birth-container">
        <div class="form-title">
            <h3>Please provide the following information below</h3>
        </div>
        <form method="post" action="father.php">
            <div class="form-p">
                <p>Personal Information</p>
            </div>
            <div class="form-group-sex">
                <label class="input-label-sex">Sex</label><br>
                <div class="sex-container">
                    <input type="radio" id="sex-male" name="sex" value="male">
                    <label for="sex">Male</label><br>
                    <input type="radio" id="sex-female" name="sex" value="female">
                    <label for="sex">Female</label>
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
                <input class="input-value" type="text" id="first-name" name="first-name" placeholder="First name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label" id="middle-name-personal">Your Middle Name</label>
                <input class="input-value" type="text" id="middle-name" name="middle-name" placeholder="Middle name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label" id="last-name-personal">Your Last Name</label>
                <input class="input-value" type="text" id="last-name" name="last-name" placeholder="Last name" autocomplete="off">
            </div>
            <div class="form-group-married-last-name" id="form-married-last-name" style="display: none;">
                <label class="input-label" id="married-last-name-personal">Your Married Last Name</label>
                <input class="input-value" type="text" id="married-last-name" name="married-last-name" placeholder="Last name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label">Your Birthday</label>
                <input class="input-value" type="date" id="birthday" name="birthday">
            </div>
             <div class="form-group">
                <label class="input-label">Your ID Type</label>
                <select class="input-value" id="selectIDType" name="type_Of_Id">
                            <option disabled selected>--Select Type of ID--</option>
                            <option>Philippine Identification System (Philsys)</option>
                            <option>Philippine Passport issued by Department of Foreign Affairs (DFA)</option>
                            <option>Driver's License issued by Land Transportation Office (LTO)</option>
                            <option>Integrated Bar of the Philippine (IBP) ID</option>
                            <option>Government Service Insurance System (GSIS)</option>
                            <option>Social Security System (SSS) ID</option>
                            <option>Voter's ID issued by Commision of Election (COMELEC)</option>
                            <option>Professional Regulation Commission (PRC) ID</option>
                    </select>
            </div>

            <div class="submit-btn-birth">
                <input type="hidden" name="type" id="user-type"/>
                <button id="birth-back-btn">Back</button>
                <button id="birth-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script defer src="birth-form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="index.js"></script>
</body>
</html>



