document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const selectPurpose = document.getElementById('selectPurpose');

  form.addEventListener('submit', (e) => {
    if (!selectPurpose.value) {
      e.preventDefault();
      swal("Warning", "Please select a purpose for your request.", "warning");
    }
  });

    document.getElementById('purpose-back-btn').onclick = function (){
        window.history.back();
    };

        const otherReasonGroup = document.getElementById('otherReasonGroup');

        selectPurpose.addEventListener('change', function () {
            if (selectPurpose.value === 'Others') {
                otherReasonGroup.style.display = 'block';
            } else {
                otherReasonGroup.style.display = 'none';
            }
        });
});



