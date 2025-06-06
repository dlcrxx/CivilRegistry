document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('husband-btn').addEventListener("click", function (event) {
        const husbandFirstName = document.getElementById('husband-first-name').value.trim();
        const husbandMiddleName = document.getElementById('husband-middle-name').value.trim();
        const husbandLastName = document.getElementById('husband-last-name').value.trim();

        if(!husbandFirstName || !husbandMiddleName || !husbandLastName){
            event.preventDefault();
            swal("Warning", "Please fill in all required fields.", "warning");
            return;
        }
    })
    document.getElementById('husband-back-btn').addEventListener("click", function (event) {
        event.preventDefault();
        window.history.back();
    })
})     