document.getElementById("date-btn").addEventListener("click", function (event) {
    const dateInput = document.getElementById("date-of-death");
    const selectedDate = new Date(dateInput.value);
    const today = new Date();

    // Remove time part from today's date for accurate comparison
    today.setHours(0, 0, 0, 0);

    if (!dateInput.value) {
        event.preventDefault();
        swal("Warning", "Please select a date of death.", "warning");
        return;
    }

    if (selectedDate > today) {
        event.preventDefault();
        swal("Invalid Date", "Date of death cannot be in the future.", "error");
    }
});

document.getElementById("date-back-btn").addEventListener("click", function () {
    window.history.back();
});
