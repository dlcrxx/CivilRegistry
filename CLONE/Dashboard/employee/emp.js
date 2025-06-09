// Handle form submit for updating status (JavaScript only)
editForm.addEventListener('submit', e => {
  e.preventDefault();

  const id = editIdInput.value;
  const status = statusSelect.value;

  // Update status cell text directly in the table
  const row = document.querySelector(`tr[data-id="${id}"]`);
  if (row) {
    row.querySelector('.status-cell').textContent = status;
    row.querySelector('.btn-edit').dataset.status = status;
    modal.style.display = 'none';
    alert('Status updated (client-side only).');
  } else {
    alert('Record not found.');
  }
});


