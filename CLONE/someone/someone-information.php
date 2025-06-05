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

    header("Location: their-father.php");
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
                <p>Someone Information</p>
            </div>
            <div class="form-group-sex">
                <label class="input-label-sex">What is their sex</label><br>
                <div class="sex-container">
                    <input type="radio" id="sex-male" name="sex" value="male">
                    <label for="sex">Male</label><br>
                    <input type="radio" id="sex-female" name="sex" value="female">
                    <label for="sex">Female</label>
                </div>
            </div>
            <div class="form-group-check-personal" id="civil-status-personal" style="display: none;">
                <label class="input-label">Their civil status</label><br>
                 <div class="marital-status-container">
                    <input type="radio" id="status-married" name="marital-status" value="married">
                    <label>Married</label><br>
                    <input type="radio" id="status-single" name="marital-status" value="single">
                    <label>Single</label>
                </div>
            </div>
            <div class="form-group">
                <label class="input-label" id="name-personal">Their First Name</label>
                <input class="input-value" type="text" id="first-name" name="first-name" placeholder="First name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label" id="middle-name-personal">Their Middle Name</label>
                <input class="input-value" type="text" id="middle-name" name="middle-name" placeholder="Middle name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label" id="last-name-personal">Their Last Name</label>
                <input class="input-value" type="text" id="last-name" name="last-name" placeholder="Last name" autocomplete="off">
            </div>
            <div class="form-group-married-last-name" id="form-married-last-name" style="display: none;">
                <label class="input-label" id="married-last-name-personal">Their Married Last Name</label>
                <input class="input-value" type="text" id="married-last-name" name="married-last-name" placeholder="Last name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="input-label">Their Birthday</label>
                <input class="input-value" type="date" id="birthday" name="birthday">
            </div>

            <div class="submit-btn-birth">
                <input type="hidden" name="type" id="user-type"/>
                <button id="birth-back-btn">Back</button>
                <button id="birth-btn" type="submit">Continue</button>
            </div>
        </form>
    </div>
    <script defer src="someone.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="index.js"></script>
</body>
</html>



