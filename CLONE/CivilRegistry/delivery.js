document.addEventListener("DOMContentLoaded", function () {
    const deliveryBtn = document.getElementById("delivery-birth-btn");
    const backBtn = document.getElementById("delivery-back");

    deliveryBtn.addEventListener("click", function (event) {
        const recipientName = document.getElementById("recipient-name").value.trim();
        const streetAddress = document.getElementById("house-number-label").value.trim();
        const subAddress = document.getElementById("subdi-bldg-value").value.trim();
        const barangay = document.getElementById("selectBarangay").value;
        const contact = document.getElementById("contact-value").value.trim();
        const email = document.getElementById("email-address").value.trim();
        const payment = document.getElementById("selectPayment").value;
        const controlNumber = document.getElementById("controlNumber").value.trim();

        // Check for required fields
        if (!recipientName || !streetAddress || !barangay || barangay === "Select Barangay" || 
            !contact || !email || !payment || payment === "Select Payment" || !controlNumber) {
            event.preventDefault();
            swal("Missing Fields", "Please fill in all required fields.", "warning");
            return;
        }

        // Validate email format
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            event.preventDefault();
            swal("Invalid Email", "Please enter a valid email address.", "warning");
            return;
        }

        // Validate contact number (basic digit check)
        if (!/^\d{7,15}$/.test(contact)) {
            event.preventDefault();
            swal("Invalid Contact", "Please enter a valid contact number (7-15 digits).", "warning");
            return;
        }

        // Validate control number
        if (!/^\d+$/.test(controlNumber)) {
            event.preventDefault();
            swal("Invalid Control Number", "Control number must be numeric.", "warning");
            return;
        }

        // ✅ All validations passed
    });

    backBtn.addEventListener("click", function () {
        window.history.back();
    });
});
