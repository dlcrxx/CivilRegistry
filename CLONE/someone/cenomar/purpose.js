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

          document.getElementById("purpose-btn").addEventListener("click", function(e) {
          const selectedPurpose = document.getElementById("selectPurpose").value;
          const otherReason = document.getElementById("other-reason").value;

          if (selectedPurpose === "Others" && otherReason.trim() === "") {
              e.preventDefault();
              swal("Warning", "Please provide your reason.", "warning");
          }
    });
});



