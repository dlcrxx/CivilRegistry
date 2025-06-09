document.addEventListener("DOMContentLoaded", function () {
    const sexRadios = document.getElementsByName("their-sex");

    document.getElementById('birth-btn').addEventListener("click", function (event) {
        const selectedSex = [...sexRadios].find(r => r.checked)?.value || '';
        const name = document.getElementById('first-name').value.trim();
        const middleName = document.getElementById('middle-name').value.trim();
        const lastName = document.getElementById('last-name').value.trim();
        const birthday = document.querySelector('input[type="date"]').value;

        if (!name || !middleName || !lastName || birthday === "" || !typeOfId || typeOfId.startsWith("--")) {
            event.preventDefault();
            swal("Warning", "Please fill in all required fields.", "warning");
            return;
        }

        if (!selectedSex) {
            event.preventDefault();
            swal("Warning", "Please select their sex.", "warning");
            return;
        }

    });

    document.getElementById("birth-back-btn").addEventListener("click", function(event) {
        event.preventDefault(); 
        window.history.back();
    });
});

    



