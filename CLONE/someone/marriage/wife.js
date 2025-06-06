document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('wife-btn').addEventListener("click", function (event) {
        const wifeFirstName = document.getElementById('wife-first-name').value.trim();
        const wifeMiddleName = document.getElementById('wife-middle-name').value.trim();
        const wifeLastName = document.getElementById('wife-last-name').value.trim();

        if(!wifeFirstName || !wifeMiddleName || !wifeLastName){
            event.preventDefault();
            swal("Warning", "Please fill in all required fields.", "warning");
            return;
        }
    })
    document.getElementById('wife-back-btn').addEventListener("click", function (event) {
        event.preventDefault();
        window.history.back();
    })
})     