let selectedDocument = '';

function selectType(type, event) {
    event.preventDefault(); // Prevent form/button default behavior
    selectedDocument = type;
    document.getElementById('typeOfcert').value = type;

    // Highlight the selected button
    document.querySelectorAll('.document-type button').forEach(btn => btn.classList.remove('selected'));
    event.target.classList.add('selected');
}

document.getElementById('type-back-btn').onclick = function () {
    window.history.back();
};

document.getElementById('chooseTypeofDoc').onsubmit = function (e) {
    const selected = document.getElementById('typeOfcert').value;

    if (!selected) {
        swal("Invalid Request", "Please choose for whom you will process this request", "warning");
        e.preventDefault();
        return;
    }
};