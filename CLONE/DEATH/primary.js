
document.getElementById("primary-btn").addEventListener("click", function (event) {
    const firstName = document.getElementById("first-name").value.trim();
    const middleName = document.getElementById("middle-name").value.trim();
    const lastName = document.getElementById("last-name").value.trim();

    if (!firstName || !middleName || !lastName) {
        event.preventDefault();
        swal("Warning", "Please complete all relative name fields.", "warning");
    }
});

document.getElementById("primary-back-btn").addEventListener("click", function () {
    window.history.back();
});

