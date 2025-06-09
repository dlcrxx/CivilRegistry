const modal = document.getElementById('editModal');
    const modalClose = document.getElementById('modalClose');
    const editForm = document.getElementById('editForm');
    const EmployeeIdInput = document.getElementById('EmployeeId');
    const nameInput = document.getElementById('name');
    const roleSelect = document.getElementById('role');

    // Open modal on Edit button click
    document.querySelectorAll('.edit-btn').forEach(button => {
      button.addEventListener('click', () => {
        const id = button.dataset.id;
        const name = button.dataset.name;
        const role = button.dataset.role;

        EmployeeIdInput.value = id;
        nameInput.value = name;
        roleSelect.value = role;

        modal.style.display = 'flex';
      });
    });

    // Close modal when clicking the close button
    modalClose.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    // Close modal if clicking outside the modal content
    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });

    