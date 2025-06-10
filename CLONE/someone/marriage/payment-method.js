document.addEventListener('DOMContentLoaded', function () {
    const paymentBoxes = document.querySelectorAll('.form-group-payment');
    const selectPayment = document.getElementById('selectPayment');
    const inputLabel = document.getElementById('inputLabel');
    const controlInput = document.getElementById('controlInput');
    const controlInputGroup = document.getElementById('controlInputGroup');
    const otcNote = document.getElementById('otcNote');

    const paymentOptions = {
        online: [
            { name: 'Gcash', placeholder: 'Enter GCash number', label: 'Mobile Number' },
            { name: 'Maya', placeholder: 'Enter Maya number', label: 'Mobile Number' },
            { name: 'VISA', placeholder: 'Enter Card Number', label: 'Card Number' },
            { name: 'BayadOnline', placeholder: 'Enter Control Number', label: 'Control Number' }
        ],
        otc: [
            { name: 'Palawan Express', placeholder: 'Enter Reference Number', label: 'Reference Number' },
            { name: 'Cebuana Lhuillier', placeholder: 'Enter Reference Number', label: 'Reference Number' },
            { name: 'MLhuillier', placeholder: 'Enter Reference Number', label: 'Reference Number' },
            { name: 'LBC', placeholder: 'Enter Reference Number', label: 'Reference Number' }
        ]
    };

    let currentOTP = ''; // store OTP here

    function generateOTP(length = 6) {
        let otp = '';
        for (let i = 0; i < length; i++) {
            otp += Math.floor(Math.random() * 10); // generates a digit from 0-9
        }
        return otp;
    }

    function sendOTP() {
        currentOTP = generateOTP();
        let parms = {
            email: emailAdd,
            otp: currentOTP
        };
        return emailjs.send('service_mzloflf', 'template_qeqghg8', parms);
    }

    let selectedType = '';

    paymentBoxes.forEach(box => {
        box.addEventListener('click', () => {
            // Highlight selected box
            paymentBoxes.forEach(b => b.classList.remove('selected'));
            box.classList.add('selected');

            selectedType = box.dataset.type;

            // Update dropdown
            selectPayment.innerHTML = '<option selected disabled>Select Payment</option>';
            paymentOptions[selectedType].forEach(opt => {
                const optionEl = document.createElement('option');
                optionEl.value = opt.name;
                optionEl.textContent = opt.name;
                selectPayment.appendChild(optionEl);
            });

            // Hide input and note initially
            controlInputGroup.style.display = 'none';
            inputLabel.textContent = '';
            controlInput.placeholder = '';
            controlInput.value = '';
            otcNote.style.display = selectedType === 'otc' ? 'block' : 'none';
        });
    });

    selectPayment.addEventListener('change', () => {
        const optionData = paymentOptions[selectedType].find(
            opt => opt.name === selectPayment.value
        );
        if (optionData) {
            inputLabel.textContent = optionData.label;
            controlInput.placeholder = optionData.placeholder;
            controlInputGroup.style.display = 'block';
        }
    });

    // --- Add form validation and OTP verification below ---

    const form = document.querySelector('form');
    const referenceInput = document.getElementById('referenceNum');
    const paymentBtn = document.getElementById('payment-birth-btn');

    const storedRef = localStorage.getItem('referenceNumber');
     console.log(storedRef);

    paymentBtn.addEventListener('click', function (event) {
        event.preventDefault();

        const enteredRef = referenceInput.value.trim();
        const selectedPaymentValue = selectPayment.value;
        const controlInputValue = controlInput.value.trim();

       

        // Check required fields
        if (!enteredRef || !selectedPaymentValue || !controlInputValue) {
            Swal.fire("Missing Fields", "Please fill in all required fields.", "warning");
            return;
        }

        // Check reference number matches stored value
        if (storedRef && enteredRef !== storedRef.trim()) {
            Swal.fire("Reference Mismatch", "The reference number you entered does not match the one sent to your email.", "error");
            return;
        }

        // Send OTP email and then prompt user to input OTP
        sendOTP().then(() => {
            Swal.fire("OTP Sent", "Please check your email for the OTP.", "success").then(() => {
               Swal.fire({
                    title: 'Enter OTP',
                    text: 'Please enter the OTP sent to your email',
                    input: 'text',
                    inputPlaceholder: '6-digit OTP',
                    showCancelButton: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to enter the OTP!';
                        }
                        if (value !== currentOTP) {
                            return 'Incorrect OTP! Please try again.';
                        }
                        return null;
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // OTP matches, submit the form
                        form.submit();
                    }
                });
            });
        }).catch(() => {
            Swal.fire("Error", "Failed to send OTP. Please try again.", "error");
        });
    });
});
