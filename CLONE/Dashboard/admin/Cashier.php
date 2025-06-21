<?php
// Sample data if not set yet (for testing)
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [
      ['id'=>1, 'recipient_name'=>'Juan Dela Cruz', 'type_of_document'=>'Birth Certificate','transactionmode' => 'Walk-in', 'modeofpayment' => 'Over the Counter','reference_number'=>'ABC123', 'status'=>'Pending'],
        ['id'=>2, 'recipient_name'=>'Maria Santos', 'type_of_document'=>'Marriage Certificate','transactionmode' => 'Delivery', 'modeofpayment' => 'Gcash','reference_number'=>'XYZ789', 'status'=>'Paid'],
    ];
}
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
      <div class="dashboard-content">
        <h3>Payment Records</h3>
        <form method="GET" style="margin-bottom: 20px;">
          <input type="text" name="search" placeholder="Search by name, email, or address"
            value=""
            style="padding: 8px; width: 300px; border-radius: 5px; border: 1px solid #ccc;">
          <button type="submit"
            style="padding: 8px 12px; border-radius: 5px; background-color: #0066cc; color: white; border: none;">
            Search
          </button>
        </form>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Type of Document</th>
              <th>Transaction Mode</th>
              <th>Mode of Payment</th>
              <th>Reference Number</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="requestsTableBody">
            <?php 
              if (!empty($_SESSION['requests']) && is_array($_SESSION['requests'])):
                foreach ($_SESSION['requests'] as $client): 
            ?>
              <tr data-id="<?= htmlspecialchars($client['id']) ?>">
                <td><?= htmlspecialchars($client['id']) ?></td>
                <td><?= htmlspecialchars($client['recipient_name']) ?></td>
                <td><?= htmlspecialchars($client['type_of_document']) ?></td>
                <td><?= htmlspecialchars($client['transactionmode']) ?></td>
                <td><?= htmlspecialchars($client['modeofpayment']) ?></td>
                <td><?= htmlspecialchars($client['reference_number']) ?></td>
                <td class="status-cell"><?= htmlspecialchars($client['status']) ?></td>
                <td>
                    <button class="btn-edit" 
                      data-id="<?= htmlspecialchars($client['id']) ?>" 
                      data-status="<?= htmlspecialchars($client['status']) ?>"
                      style="padding: 8px 12px; border-radius: 5px; background-color: #003366;; color: white; border: none; margin-right:5px;">
                      Edit
                    </button>
                    <button class="btn-delete" 
                      data-id="<?= htmlspecialchars($client['id']) ?>" 
                      >
                      Delete
                    </button>
                  </td>
              </tr>
            <?php 
                endforeach;
              else: 
            ?>
              <tr>
                <td colspan="6">No requests found in session data.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- Modal popup for editing status -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="modal-close" id="modalClose">&times;</span>
      <div class="modal-header">Edit Document Status</div>
      <form id="editForm">
        <input type="hidden" id="editId" name="id" />
        <label for="statusSelect">Status:</label>
        <select id="statusSelect" name="status" required>
          <option value="">-- Select Status --</option>
          <option value="Pending">Pending</option>
          <option value="Unpaid">Unpaid</option>

        </select>
        <br/><br/>
        <button type="submit">Save</button>
      </form>
    </div>
  </div>

  <script>
    // Elements
    const modal = document.getElementById('editModal');
    const modalClose = document.getElementById('modalClose');
    const editForm = document.getElementById('editForm');
    const editIdInput = document.getElementById('editId');
    const statusSelect = document.getElementById('statusSelect');

    // Open modal when Edit button clicked
    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.id;
        const status = btn.dataset.status;

        editIdInput.value = id;
        statusSelect.value = status;

        modal.style.display = 'flex';
      });
    });

    // Close modal
    modalClose.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', e => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });

    // Handle form submit for updating status
    editForm.addEventListener('submit', e => {
      e.preventDefault();

      const id = editIdInput.value;
      const status = statusSelect.value;

      fetch('update-status.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({id, status})
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          // Update status cell text
          const row = document.querySelector(`tr[data-id="${id}"]`);
          if (row) {
            row.querySelector('.status-cell').textContent = status;
            // Also update button dataset status for next edit
            row.querySelector('.btn-edit').dataset.status = status;
          }
          modal.style.display = 'none';
          alert('Status updated successfully!');
        } else {
          alert('Failed to update status.');
        }
      })
      .catch(() => alert('Error updating status.'));
    });

    // Handle delete button click
    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.id;
        if (confirm('Are you sure you want to delete this record?')) {
          fetch('delete-request.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: new URLSearchParams({id})
          })
          .then(res => res.json())
          .then(data => {
            if (data.success) {
              // Remove row from table
              const row = document.querySelector(`tr[data-id="${id}"]`);
              if (row) row.remove();
              alert('Record deleted successfully!');
            } else {
              alert('Failed to delete record.');
            }
          })
          .catch(() => alert('Error deleting record.'));
        }
      });
    });
      window.addEventListener('pageshow', function (event) {
    if (event.persisted || (window.performance && performance.getEntriesByType("navigation")[0].type === "back_forward")) {
      window.location.reload();
    }
  });
  </script>
  <script src="emp.js"></script>
</body>

</html>