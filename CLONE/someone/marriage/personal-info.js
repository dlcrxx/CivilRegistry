document.addEventListener("DOMContentLoaded", function () {       
     document.getElementById('personal-info-submit').addEventListener("click", function (event) {
        const sexRadios = document.querySelectorAll('input[name="sex"]');
        const selectedSex = [...sexRadios].find(r => r.checked)?.value || '';
        const name = document.getElementById('first-name').value.trim();
        const middleName = document.getElementById('middle-name').value.trim();
        const lastName = document.getElementById('last-name').value.trim();
        const birthday = document.querySelector('input[type="date"]').value;
        const typeOfId = document.getElementById('selectIDType').value;

        if (!name || !middleName || !lastName || birthday === "" || !typeOfId || typeOfId.startsWith("--")) {
            event.preventDefault();
            swal("Warning", "Please fill in all required fields.", "warning");
            return;
        }

        if (!selectedSex) {
            event.preventDefault();
            swal("Warning", "Please select your sex.", "warning");
            return;
        }
    });

    document.getElementById("personal-info-back").addEventListener("click", function(event) {
        event.preventDefault(); 
        window.history.back();
    });
});

    



