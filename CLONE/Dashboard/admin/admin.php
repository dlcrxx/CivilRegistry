<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: ../../CivilRegistry/index.php");
    exit();
}

$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

$sql = "SELECT EmployeeId, name, username, role FROM employees";
if (!empty($search)) {
    $sql .= " WHERE name LIKE '%$search%' OR username LIKE '%$search%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - eSertipiko Marikina</title>
  <link rel="stylesheet" href="../admin.css" />
  <link rel="icon" href="../../images/android-chrome-192x192.png" />
  <link rel="stylesheet" href="../../CivilRegistry/style.css" />
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


    <main class="dashboard">
      <h2>Welcome, <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!</h2>
      <div class="dashboard-content">
        <h3>Employee Records</h3>
        <form method="GET" style="margin-bottom: 20px;">
          <input
            type="text"
            name="search"
            placeholder="Search by name or username"
            value="<?= htmlspecialchars($search) ?>"
            style="padding: 8px; width: 300px; border-radius: 5px; border: 1px solid #ccc;"
          />
          <button
            type="submit"
            style="padding: 8px 12px; border-radius: 5px; background-color: #0066cc; color: white; border: none;"
          >
            Search
          </button>
        </form>

        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Password</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
              <?php $count = 1; ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?= $count++ ?></td>
                  <td><?= htmlspecialchars($row['name']) ?></td>
                  <td><?= htmlspecialchars($row['username']) ?></td>
                  <td>••••••••••</td>
                  <td><?= htmlspecialchars($row['role']) ?></td>
                  <td>
                    <button 
                      class="edit-btn" 
                      data-id="<?= $row['EmployeeId'] ?>" 
                      data-name="<?= htmlspecialchars($row['name'], ENT_QUOTES) ?>"
                      data-role="<?= htmlspecialchars($row['role'], ENT_QUOTES) ?>">Edit Role
                    </button> 
                     <form action="delete.php" method="GET" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                      <input type="hidden" name="id" value="<?= $row['EmployeeId'] ?>">
                      <button type="submit" class="btn-delete">Delete</button>
                    </form>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr><td colspan="6">No records found.</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </main>

    <!-- Modal popup -->
    <div id="editModal" class="modal">
      <div class="modal-content">
        <span class="modal-close" id="modalClose">&times;</span>
        <div class="modal-header">Edit Employee Role</div>
        <form id="editForm" method="POST" action="edit-role.php">
          <input type="hidden" name="EmployeeId" id="EmployeeId" />
          <label for="name">Name:</label>
          <input type="text" id="name" readonly />

          <label for="role">Role:</label>
          <select id="role" name="role" required>
            <option value="">-- Select Role --</option>
            <option value="Admin">Admin</option>
            <option value="Validate Officer">Validate Officer</option>
            <option value="Processing Officer">Processing Officer</option>
            <option value="Document Signatory">Document Signatory Officer</option>
            <option value="Cashier">Cashier</option>
            <option value="Releasing Clerk">Releasing Clerk</option>
            <!-- Add other roles as needed -->
          </select>

          <button type="submit">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    window.addEventListener('pageshow', function (event) {
    if (event.persisted || (window.performance && performance.getEntriesByType("navigation")[0].type === "back_forward")) {
      window.location.reload();
    }
  });
  </script>
</body>
</html>
