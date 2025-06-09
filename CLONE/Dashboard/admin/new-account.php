<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Dashboard - eSertipiko Marikina</title>
    <link rel="stylesheet" href="../admin.css">
    <link rel="icon" href="../../images/android-chrome-192x192.png">
    <link rel="stylesheet" href="../../CivilRegistry/style.css">
</head>
<body>
     <div class="dashboard-page">
        <aside class="sidebar">
        <a href="admin.php" title="Profile">👤</a>
        <a href="new-account.php" title="Documents">📄</a>
        <a href="logout.php" title="Logout">⚙️</a>
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
                            <option value="employee">Employee</option>
                    </select>
                    </div>
                    <div class="button-admin">
                         <button id="create-account" type="submit" name="submit">Create Account</button>
                    </div>
               </form>
              
          </div>
        </div>
     </div>
</body>
</html>