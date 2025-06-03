const warningMsg = document.getElementById('warningMsg');
const warningMsgContact = document.getElementById('warningMsgContact');
let emailInput = document.getElementById('appointment-text-email');
let contactInput = document.getElementById('appointment-text-contact');


// Email focus/blur interaction
emailInput.addEventListener('focus', function () {
    warningMsg.textContent = "Input your active email";
});

emailInput.addEventListener('blur', function () {
    warningMsg.textContent = "";
});

contactInput.addEventListener('focus', function () {
    warningMsgContact.textContent = "Input your valid contact number";
});

contactInput.addEventListener('blur', function () {
    warningMsgContact.textContent = "";
});

contactInput.addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, ''); // Remove all non-digits
});

function sendMail(){

    let parms ={
        name: document.getElementById('appointment-text-name').value,
        email: document.getElementById('appointment-text-email').value,
        date: document.getElementById('appointment-text-date').value,
        time: document.getElementById('appointment-text-time').value,
        civilRegistryDoc: document.getElementById('selectDocument').value
    }

    emailjs.send('service_u4a8a5w','template_ojsnqhe',parms).then( swal("Please check your email", "Your appointment has been submitted!", "success"));
}

// Submit button logic with validation
document.getElementById('submit-btn').onclick = function () {
    const name = document.getElementById('appointment-text-name').value.trim();
    const email = document.getElementById('appointment-text-email').value.trim();
    const contact = document.getElementById('appointment-text-contact').value.trim();
    const documentType = document.getElementById('selectDocument').value;
    const date = document.querySelector('input[type="date"]').value;
    const time = document.querySelector('input[type="time"]').value;
    const checkbox = document.getElementById('dataConfirmation').checked;

    if (!name || !email || !contact || documentType === "Choose document" || !date || !time) {
        swal("Warning", "Please fill in all required fields.", "warning");
        return;
    }

    if (!checkbox) {
        swal("Warning", "You must confirm that the information is correct.", "warning");
        return;
    }

    // If everything is valid
    sendMail();
    document.querySelector('form').reset();
};



