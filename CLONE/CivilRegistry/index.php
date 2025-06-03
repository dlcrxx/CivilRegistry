<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                            <a href="birth-cert.html">Birth Certificate</a>
                            <a href="marriage-cert.html">Marriage Certificate</a>
                            <a href="cenomar.html">CENOMAR</a>
                            <a href="death-cert.html">Death Certificate</a>
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
                <div>
                    <i class="bi bi-person-fill"></i>
                </div>
        </div>
    </section>
    </div>

    <!----Content----->
    <section class="first_view">
        <div class="fv-text">
            <h1>Civil Registry Online Application and Delivery</h1>
            <p>Welcome to Marikina City's official online civil registry portal — your convenient gateway to requesting birth, marriage, death certificates, and other essential civil documents. Fast, secure, and user-friendly, this service is built to serve every Marikeño with efficiency, transparency, and care.</p>
        </div>
        <div class="ctn-order-btn">
            <button id="btn-order">Order now</button>
        </div>

    <!---selection for appoinment--->
        <div class="appointment-selection" id="appointment">
            <div class="selection-container">
                <a href="walk-in-appoinment.php">
                    <img src="walk-in.png">
                    <h3>Walk-in</h3>
                </a>
            </div>
            <div class="selection-container">
                <a href="choose-for.php">
                    <img src="delivery.png">
                    <h3>Delivery</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="available-documents">
        <h2>Available Certificates</h2>
        <p>You can request these documents through this portal.</p>
        <div class="certificate-container">
            <div class="certificate">
                <img src="birth-certificate.png">
                <h3>Birth Certificate</h3>
                <p>A legal document confirming a person's birth, including their name, birth date, place, and parent details.</p>
                <button class="btn-certificate" id="birth-certificate">Order now</button>
            </div>
            <div class="certificate">
                <img src="marriage-certificate.png">
                <h3>Marriage Certificate</h3>
                <p>A legal record of a couple’s marriage, including their ames, and the date and place of the ceremony. </p>
                <button class="btn-certificate" id="marriage-certificate">Order now</button>
            </div>
            <div class="certificate">
                <img src="death-certificate.png">
                <h3>Death Certificate</h3>
                <p>An official document that certifies a person's death, providing key details such as the date, time, place, and cause of death.  </p>
                <button class="btn-certificate" id="death-certificate">Order now</button>
            </div>
            <div class="certificate">
                <img src="cenomar.png">
                <h3>CENOMAR</h3>
                <p>A certification issued to prove that a person has never been married or that no marriage records exist under their name.</p>
                <button class="btn-certificate" id="cenomar">Order now</button>
            </div>
        </div>
    </section>



    <section class="text-description">
        <h2 id="about-us"> About Us</h2>
        <p>
            eSertipiko Marikina is an official online civil portal and authorized partner of the Philippines Statistics Authority (PSA) for the online ordering, processing, and delivery of PSA documents in Marikina City. <br>
            This website has been providing convenience, secure service, and accessibility for the citizen of Marikina City. 
            <br> <br>
            There's no need for a PSA online appointment when requesting certificates in Marikina. Our local Marikina Civil Registry Online Ordering System lets you conveniently submit your request anytime, anywhere — whether you're using a mobile phone, laptop, desktop, or tablet.
            You can easily request your official birth certificate, marriage certificate, CENOMAR (Certificate of No Marriage), CENODEATH (Certificate of No Death), or death certificate, all for delivery within Marikina City — just a click away.
            <br><br>
            Our Marikina Civil Registry Delivery Service offers secure, door-to-door delivery of your requested certificates within Marikina City. For assistance, you may contact our dedicated local support team during business hours, Monday to Saturday, 8:00 AM to 5:00 PM (excluding holidays). You can also reach us via email at esertipiko.marikina@gmail.com for any inquiries.

            You can easily track the status of your application through our website, and receive updates via email. Enjoy a smooth and worry-free experience, from request to delivery, all within Marikina.
        </p>
    </section>

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
</body>
</html>