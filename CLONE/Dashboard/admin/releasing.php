<?php
// Sample data (if not already set)
if (!isset($_SESSION['requests'])) {
  $_SESSION['requests'] = [
    [
      'id' => 1,
      'recipient_name' => 'Juan Dela Cruz',
      'type_of_document' => 'Birth Certificate',
      'transactionmode' => 'Walk-in',
      'modeofpayment' => 'Over the Counter',
      'reference_number' => 'ABC123',
      'status' => 'Ready for Pick-up',
      'date' => '2025-06-12'
    ],
    [
      'id' => 2,
      'recipient_name' => 'Maria Santos',
      'type_of_document' => 'Marriage Certificate',
      'transactionmode' => 'Delivery',
      'modeofpayment' => 'Gcash',
      'reference_number' => 'XYZ789',
      'status' => 'Delivered',
      'date' => '2025-06-12'
    ]
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
  <style>
     .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 20px;
      border-radius: 6px;
      max-width: 400px;
      width: 90%;
    }

    .modal-close {
      float: right;
      cursor: pointer;
      font-size: 20px;
      font-weight: bold;
    }

    .modal-header {
      margin-bottom: 15px;
      font-weight: bold;
      font-size: 18px;
    }

    button {
      cursor: pointer;
    }

    input[type="date"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
      cursor: pointer;
      filter: invert(0.5);
    }

.calendar-container {
  display: none;
  border: 1px solid #ccc;
  margin-top: 5px;
  background: white;
  width: 100%;
  max-width: 100%;
  padding: 10px;
  box-sizing: border-box;
  border-radius: 6px;
  overflow: hidden;
}

#customDate {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.calendar-table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  text-align: center;
}

.calendar-table th {
  padding: 6px;
  background-color: #f0f0f0;
  font-weight: bold;
}

.calendar-table td {
  padding: 6px;
}

.date-btn {
  width: 100%;
  padding: 6px 0;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}

.date-btn:hover {
  background-color: #0056b3;
}

.btn-edit {
  background-color: #003366;
  color: white;
  padding: 6px 12px;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  cursor: pointer;
}

.btn-edit:hover {
  background-color: #002244;
}
  </style>
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
        <h3>Document Records</h3>
        <form method="GET" style="margin-bottom: 20px;">
          <input type="text" name="search" placeholder="Search by name, email, or address" style="padding: 8px; width: 300px; border-radius: 5px; border: 1px solid #ccc;">
          <button type="submit" style="padding: 8px 12px; border-radius: 5px; background-color: #0066cc; color: white; border: none;">
            Search
          </button>
        </form>

        <table cellpadding="10" cellspacing="0" style="width:100%; border-collapse: collapse;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Type of Document</th>
              <th>Transaction Mode</th>
              <th>Mode of Payment</th>
              <th>Reference Number</th>
              <th>Status</th>
              <th>Date</th>
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
                <td id="date-<?= htmlspecialchars($client['id']) ?>">
                  <?= isset($client['date']) ? htmlspecialchars($client['date']) : 'N/A' ?>
                </td>
                <td>
                  <button class="btn-edit" 
                    data-id="<?= htmlspecialchars($client['id']) ?>" 
                    data-status="<?= htmlspecialchars($client['status']) ?>"
                    data-date="<?= isset($client['date']) ? htmlspecialchars($client['date']) : '' ?>">
                    Edit
                  </button>
                  <button class="btn-delete" 
                      data-id="<?= htmlspecialchars($client['id']) ?>" 
                      >
                      Delete
                    </button>
                </td>
              </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="modal-close" id="modalClose">&times;</span>
      <div class="modal-header">Edit Record</div>
      <form id="editForm">
        <input type="hidden" id="editId" name="id" />
        <label for="statusSelect">Status:</label>
        <select id="statusSelect" name="status" required>
          <option value="">-- Select Status --</option>
          <option value="Pending">Pending</option>
          <option value="Unpaid">Unpaid</option>
          <option value="Ready for Pick-up">Ready for Pick-up</option>
          <option value="Delivered">Delivered</option>
        </select>
        <br/><br/>
        <label for="customDate">Date:</label><br>
        <input type="text" id="customDate" readonly placeholder="Click to pick date">
        <div id="calendarContainer" class="calendar-container"></div>
        <button type="submit">Save</button>
      </form>
    </div>
  </div>

  <script>
    const modal = document.getElementById('editModal');
    const modalClose = document.getElementById('modalClose');
    const editForm = document.getElementById('editForm');
    const editIdInput = document.getElementById('editId');
    const statusSelect = document.getElementById('statusSelect');
    const customDateInput = document.getElementById('customDate');
    const calendarContainer = document.getElementById('calendarContainer');

    let currentEditId = null;

    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.id;
        const status = btn.dataset.status;
        const date = btn.dataset.date;
        currentEditId = id;
        editIdInput.value = id;
        statusSelect.value = status;
        customDateInput.value = date;
        modal.style.display = 'flex';
      });
    });

    modalClose.onclick = () => modal.style.display = 'none';
    window.onclick = e => { if (e.target === modal) modal.style.display = 'none'; }

    customDateInput.addEventListener('click', () => {
      calendarContainer.style.display = calendarContainer.style.display === "none" ? "block" : "none";
      generateCalendar(new Date());
    });

    function generateCalendar(date) {
      const year = date.getFullYear();
      const month = date.getMonth();
      const days = new Date(year, month + 1, 0).getDate();
      const firstDay = new Date(year, month, 1).getDay();

      let html = `<div style="text-align:center; font-weight:bold; margin-bottom:10px;">
        ${date.toLocaleString('default', { month: 'long' })} ${year}
      </div><table style="width:50%; text-align:center;"><tr>
        <th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr><tr>`;

      for (let i = 0; i < firstDay; i++) html += "<td></td>";

      for (let d = 1; d <= days; d++) {
        const fullDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(d).padStart(2, '0')}`;
        html += `<td><button type='button' onclick="selectDate('${fullDate}')">${d}</button></td>`;
        if ((firstDay + d) % 7 === 0) html += "</tr><tr>";
      }
      html += "</tr></table>";
      calendarContainer.innerHTML = html;
    }

    function selectDate(date) {
      customDateInput.value = date;
      calendarContainer.style.display = "none";
    }

    editForm.addEventListener('submit', e => {
      e.preventDefault();
      const newStatus = statusSelect.value;
      const newDate = customDateInput.value;

      if (currentEditId) {
        const row = document.querySelector(`tr[data-id="${currentEditId}"]`);
        if (row) {
          row.querySelector('.status-cell').textContent = newStatus;
          row.querySelector(`#date-${currentEditId}`).textContent = newDate;
          const button = row.querySelector(`button[data-id='${currentEditId}']`);
          if (button) {
            button.setAttribute('data-status', newStatus);
            button.setAttribute('data-date', newDate);
          }
        }
        modal.style.display = 'none';
        alert("Record updated successfully.");
      }
    });
  </script>
</body>
</html>