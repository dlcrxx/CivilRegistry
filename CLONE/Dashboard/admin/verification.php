<?php
// Sample data if not set yet (for testing)
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [
        ['id' => 1, 'recipient_name' => 'Juan Dela Cruz', 'type_of_document' => 'Birth Certificate', 'reference_number' => 'ABC123', 'date' => '2025-06-12', 'time' => '10:25 AM ', 'status' => 'Approved', 'remarks' => 'Completed'],
        ['id' => 2, 'recipient_name' => 'Maria Santos', 'type_of_document' => 'Marriage Certificate', 'reference_number' => 'XYZ789', 'date' => '2025-06-12', 'time' => '06:35 PM ', 'status' => 'Processing', 'remarks' => 'Missing ID'],
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
        /* Simple modal styles */
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
                <h3>Validation Records</h3>
                <form method="GET" style="margin-bottom: 20px;">
                    <input type="text" name="search" placeholder="Search by name, email, or address" value=""
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
                            <th>Reference Number</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Remarks</th>
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
                                    <td><?= htmlspecialchars($client['reference_number']) ?></td>
                                    <td><?= htmlspecialchars($client['date']) ?></td>
                                    <td><?= htmlspecialchars($client['time']) ?></td>
                                    <td class="status-cell"><?= htmlspecialchars($client['status']) ?></td>
                                    <td><?= htmlspecialchars($client['remarks']) ?></td>
                                    <td>
                                        <button class="btn-edit" data-id="<?= htmlspecialchars($client['id']) ?>"
                                            data-status="<?= htmlspecialchars($client['status']) ?>"
                                            style="padding: 8px 12px; border-radius: 5px; background-color: #003366;; color: white; border: none; margin-right:5px;">
                                            Edit
                                        </button>
                                        <button class="btn-delete" data-id="<?= htmlspecialchars($client['id']) ?>"
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
                    <option value="Approved">Approved</option>
                    <option value="Processing">Processing</option>
                    <option value="Rejected">Rejected</option>
                </select>

                <br /><br />

                <label for="remarksInput">Remarks:</label>
                <textarea id="remarksInput" name="remarks" rows="3" style="width: 100%;" required></textarea>

                <br /><br />

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
                const remarks = btn.closest('tr').querySelector('td:nth-child(8)').textContent;

                editIdInput.value = id;
                statusSelect.value = status;
                document.getElementById('remarksInput').value = remarks;

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
            const remarks = document.getElementById('remarksInput').value;

            fetch('update-status.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ id, status, remarks })

            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        // Update status cell text
                        const row = document.querySelector(`tr[data-id="${id}"]`);
                        if (row) {
                            row.querySelector('.status-cell').textContent = status;
                            row.querySelector('td:nth-child(8)').textContent = remarks; // ✅ Update remarks cell
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
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: new URLSearchParams({ id })
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