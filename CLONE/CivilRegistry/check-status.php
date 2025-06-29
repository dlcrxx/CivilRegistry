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
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f8fd;
        color: #000;
    }

    /* MAIN SECTION */
    .main {
        text-align: center;
        padding: 60px 20px 100px;
        background-color: #dbf0fc;
    }

    .main h2 {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .main p {
        font-size: 20px;
        color: #333;
        margin-bottom: 30px;
    }

    .tracker-box {
        margin: 0 auto;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        
    }

    .tracker-box input {
        padding: 10px;
        width: 400px;
        border-radius: 10px;
        border: 1px solid #ccc;
        height: 50px;
    }

    .tracker-box button {
        background-color: #003566;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .status-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 40px 20px;
        background-color: #fff;
    }

    .card {
        height: 200px;
        background-color: #e6f2fa;
        border-radius: 15px;
        width: 180px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card h4 {
    
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .card p {
        font-size: 12px;
        color: #555;
    }


    .social-icons {
        text-align: center;
        margin-top: 10px;
    }

    .social-icons .bi {
        font-size: 18px;
        margin: 0 8px;
        color: #fff;
    }

    @media screen and (max-width: 768px) {
        .tracker-box {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
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
                            <li><a href="check-status.php">Check Status</a></li>
                            <li><a href="payments.html">Payment Method</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Civil Registry Documents</a>
                                <div class="dropdown-box">
                                    <a href="birth-cert.html">Birth Certificate</a>
                                    <a href="marriage-cert.html">Marriage Certificate</a>
                                    <a href="cenomar.html">CENOMAR</a>
                                    <a href="death-cert.html">Death Certificate</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Resources</a>
                                <div class="dropdown-box">
                                    <a href="faqs-ordering.html">FAQ</a>
                                    <a href="update.html">News & Announcement</a>
                                    <a href="#">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>

        <!-- MAIN BODY -->
        <section class="main">
            <h2>Check the Status of Your Order</h2>
            <p>We value your time and aim to provide clear updates on the delivery status of your order.</p>
           <div class="tracker-box">
                    <input type="text" id="refInput" placeholder="Enter reference number">
                    <button id="checkBtn">Check Status</button>
                </div>
                <div id="statusResult" style="margin-top: 20px; font-weight: bold;"></div>

        </section>

        <!-- STATUS TRACKER CARDS -->
        <section class="status-cards">
            <div class="card">
                <h4>Received</h4>
                <p>The request has been successfully submitted and recorded in the system..</p>
            </div>
            <div class="card">
                <h4>Under Verification</h4>
                <p>The submitted documents are currently being checked for accuracy and authenticity.</p>
            </div>
            <div class="card">
                <h4>Processing</h4>
                <p>The request is actively being processed by the appropriate office or personnel.</p>
            </div>
            <div class="card">
                <h4>For Approval</h4>
                <p>The request is pending review by an authorized signatory or has already been approved.</p>
            </div>
            <div class="card">
                <h4>For Signing</h4>
                <p>The documents are awaiting official signature or are ready to be picked up/delivered.</p>
            </div>
            <div class="card">
                <h4>Released</h4>
                <p>The documents have been officially released, delivered, or claimed by the recipient.</p>
            </div>
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
        <script src="check-status.js"></script>
    </body>
</html>