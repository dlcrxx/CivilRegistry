document.addEventListener("DOMContentLoaded", function () {
    const deliveryBtn = document.getElementById("delivery-birth-btn");
    const backBtn = document.getElementById("delivery-back");

    function generateNumericReference(length = 10) {
        let ref = '';
        for (let i = 0; i < length; i++) {
            ref += Math.floor(Math.random() * 10);
        }
        return ref;
    }

    deliveryBtn.addEventListener("click", function (event) {
        event.preventDefault();

        const recipientName = document.getElementById("recipient-name").value.trim();
        const streetAddress = document.getElementById("house-number-label").value.trim();
        const subAddress = document.getElementById("subdi-bldg-value").value.trim();
        const barangay = document.getElementById("selectBarangay").value;
        const contact = document.getElementById("contact-value").value.trim();
        const email = document.getElementById("email-address").value.trim();

        const hiddenRefInput = document.getElementById("reference-number-hidden");

        function sendRefNum() {
            const reference = generateNumericReference();
            localStorage.setItem('referenceNumber', reference);

            if (hiddenRefInput) {
                hiddenRefInput.value = reference;
            }

            let parms = {
                email: email,
                reference_num: reference
            };

            return emailjs.send('service_mzloflf', 'template_66foy5l', parms);
        }

        // Validate required fields
        if (!recipientName || !streetAddress || !barangay || barangay === "Select Barangay" ||
            !contact || !email) {
            swal("Missing Fields", "Please fill in all required fields.", "warning");
            return;
        }

        // Validate email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            swal("Invalid Email", "Please enter a valid email address.", "warning");
            return;
        }

        // Validate contact number
        if (!/^\d{7,15}$/.test(contact)) {
            swal("Invalid Contact", "Please enter a valid contact number (7-15 digits).", "warning");
            return;
        }
        
        sendRefNum()
            .then(function (response) {
                console.log("Email sent successfully:", response.status, response.text);
                swal({
                    title: "Reference Sent",
                    text: "Please check your email for your reference number.",
                    icon: "success",
                    button: "Continue"
                }).then(() => {
                    event.target.closest("form").submit();
                });
            })
            .catch(function (error) {
                console.error("Email send failed:", error);
                swal("Email Error", "Failed to send reference number via email. Please try again.", "error");
            });
    });

    backBtn.addEventListener("click", function () {
        window.history.back();
    });
});
