<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="android-chrome-192x192.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init({
            publicKey: "-nPFpDZ5zrhCxbyMt",
            });
        })();
    </script>
    <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
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

    <div class="online-appointment">
        <div class="walk-in-appoinment-title">
            <h3>Book your appoinment!</h3>
            <p>For walk-in applicants, you can book your preferred date and time in advance to process your application.</p>
        </div>
        <div class="appoinment-container">
            <form>
                <p id="form-title">Please fill out the form.</p>
                <div class="form-group">
                    <label class="input-label">Name</label>
                    <input class="input-value" type="text" id="appointment-text-name" placeholder="Enter your name" autocomplete="off">
                </div>
                 <div class="form-group">
                    <label class="input-label">Email</label>
                    <input class="input-value" type="email" id="appointment-text-email" placeholder="Enter your email" autocomplete="off">
                    <p id="warningMsg"></p>
                </div>
                 <div class="form-group">
                    <label class="input-label">Contact Number</label>
                    <input class="input-value" type="tel" pattern="[0-9]" placeholder="Enter your contact number" id="appointment-text-contact" autocomplete="off">
                    <p id="warningMsgContact"></p>
                </div>
                 <div class="form-group">
                    <label class="input-label">Civil Registry Document</label>
                    <select class="input-value" id="selectDocument">
                        <option disabled selected>Choose document</option>
                        <option>Birth Certificate</option>
                        <option>Marriage Certificate</option>
                        <option>Death Certificate</option>
                        <option>CENOMAR</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label class="input-label">Preferred date</label>
                    <input class="input-value" type="date" id="appointment-text-date">
                </div>
                 <div class="form-group">
                    <label class="input-label">Preferred time</label>
                    <input class="input-value" type="time" id="appointment-text-time">
                </div>
                <div class="form-group-confirm">
                    <input type="checkbox" id="dataConfirmation">
                    <div>
                        <label id="confirmation-label"> I confirm that all the information I have provided is true and correct to the best of my knowledge.</label>
                    </div>
                </div>
                <div class="submit-btn">
                    <input type="button" value="Submit" id="submit-btn">
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="contact-us">
                <p class="footer-title">Contact us</p>
                <i class="bi bi-envelope"></i>
                <a>esertipiko.marikina@gmail.com</a><br>
                <i class="bi bi-telephone"></i>
                <span>(325) 748-1936</span><br>
                <i class="bi bi-geo-alt"></i>
                <span>Blk 7 Lot 10 Tuazon St. Barangay Sta. Elena, Marikina City</span>
            </div>

            <div class="user-agreement">
                <p class="footer-title">User Agreement</p>
                <p>Terms and Policy</p>
            </div>

            <div class="partnership">
                <p class="footer-title">Authorized Partner by</p>
                <p id="psa">Phillipine Statistics Authority</p>
            </div>
        </div>
        <div class="icon">
            <i class="bi bi-facebook icon-logo"></i>
            <i class="bi bi-twitter-x icon-logo"></i>
        </div>
        <div class="copyright">
            <p>Copyright <i class="bi bi-c-circle"></i> eSertipiko Marikina 2025. All rights reserved.</p>
        </div>
    </footer>

    <script src="index.js"></script>
    <script src="walk-in-appointment.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>