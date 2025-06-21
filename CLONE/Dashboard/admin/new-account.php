<?php
// ✅ PLACE THIS FIRST
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: ../../CivilRegistry/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Dashboard - eSertipiko Marikina</title>
    <link rel="stylesheet" href="../admin.css">
    <link rel="icon" href="../../images/android-chrome-192x192.png">
    <link rel="stylesheet" href="../../CivilRegistry/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
     <div class="dashboard-page">
        <aside class="sidebar">
      <a href="admin.php" title="Profile"><i class="fa-solid fa-user"></i></a>
      <a href="new-account.php" title="Create Account"><i class="fa-solid fa-file-circle-plus"></i></a>
      <a href="verification.php" title="Verification"><i class="fa-solid fa-circle-check"></i></a>
      <a href="process.php" title="Process"><i class="fa-solid fa-bars-progress"></i></a>
      <a href="Cashier.php" title="Cashier"><i class="fa-solid fa-coins"></i></a>
      <a href="signing.php" title="Document Signatory"><i class="fa-solid fa-file-signature"></i></a>
       <a href="releasing.php" title="Logout"><i class="fa-solid fa-truck-ramp-box"></i></a>
      <a href="logout.php" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></a>
    </aside>

        <div class="create-account">
          <div class="create-form">
               <form action="login_register.php" method="post">
                     <h3>Create account</h3>
                     <div class="form-group">
                         <label class="input-label" id="name-personal">Name</label>
                         <input class="input-value" type="text" name="name" placeholder="Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                         <label class="input-label" id="name-personal">Username</label>
                         <input class="input-value" type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                         <label class="input-label" id="name-personal">Password</label>
                         <input class="input-value" type="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                     <div class="form-group">
                         <label class="input-label" id="name-personal">Role</label>
                          <select class="input-value" id="selectRole" name="role">
                            <option value="" selected>--Select Role--</option>
                            <option value="admin">Admin</option>
                            <option value="Validate Officer">Validate Officer</option>
                            <option value="Processing Officer">Processing Officer</option>
                            <option value="Document Signatory Officer">Document Signatory Officer</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Releasing Clerk">Releasing Clerk</option>
                    </select>
                    </div>
                    <div class="button-admin">
                         <button id="create-account" type="submit" name="submit">Create Account</button>
                    </div>
               </form>
              
          </div>
        </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="new-acc.js"></script>
     <script>
            window.addEventListener('pageshow', function (event) {
    if (event.persisted || (window.performance && performance.getEntriesByType("navigation")[0].type === "back_forward")) {
      window.location.reload();
    }
  });
     </script>
</body>
</html>