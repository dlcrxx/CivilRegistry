document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const maritalStatusRadios = document.getElementsByName('their-mother-marital-status');
  const firstNameInput = document.getElementById('mother-first-name');
  const middleNameInput = document.getElementById('mother-middle-name');
  const lastNameInput = document.getElementById('mother-last-name');

  form.addEventListener('submit', function (e) {
    // Check if marital status is selected
    const maritalSelected = Array.from(maritalStatusRadios).some(radio => radio.checked);
    if (!maritalSelected) {
      e.preventDefault();
      swal("Warning", "Please select the mother's marital status.", "warning");
      return;
    }

    // Check that name fields are filled
    if (
      !firstNameInput.value.trim() ||
      !middleNameInput.value.trim() ||
      !lastNameInput.value.trim()
    ) {
      e.preventDefault();
      swal("Warning", "Please fill in all required fields.", "warning");
      return;
    }
  });

    document.getElementById('mother-back-btn').onclick = function(){
        window.history.back();
    }
});
