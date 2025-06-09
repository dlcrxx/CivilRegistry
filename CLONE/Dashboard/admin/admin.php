<?php
session_start();
include 'dbconnection.php';

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
</head>

<body>
  <div class="dashboard-page">
    <aside class="sidebar">
      <a href="admin.php" title="Profile">👤</a>
      <a href="new-account.php" title="Create Account">📄</a>
      <a href="../../CivilRegistry/index.php" title="Logout">⚙️</a>
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
                    </button> | 
                    <a class="btn-delete" href="delete.php?id=<?= $row['EmployeeId'] ?>" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
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
            <option value="Employee">Employee</option>
            <!-- Add other roles as needed -->
          </select>

          <button type="submit">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
  <script src="admin.js"></script>
</body>
</html>
