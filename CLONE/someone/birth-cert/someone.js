document.addEventListener("DOMContentLoaded", function () {
    const sexRadios = document.getElementsByName("their-sex");
    const maritalRadios = document.getElementsByName("their-marital-status");

    const civilStatusDiv = document.getElementById("civil-status-personal");
    const marriedLastNameDiv = document.getElementById("form-married-last-name");
    const labelMiddleName = document.getElementById('middle-name-personal');
    const labelLastName = document.getElementById('last-name-personal');

            
    // Listen to sex radio buttons
    sexRadios.forEach(radio => {
        radio.addEventListener("change", function () {
            if (this.value === "female") {
                civilStatusDiv.style.display = "block";
                labelMiddleName.textContent = 'Their Maiden Middle Name';
                labelLastName.textContent = 'Their Maiden Last Name';
            } else{
                civilStatusDiv.style.display = "none";
                marriedLastNameDiv.style.display = "none"; // hide this too if not female
                labelMiddleName.textContent = 'Their Middle Name';
                labelLastName.textContent = 'Their Last Name';
            }
        });
    });

    // Listen to marital status radios
    maritalRadios.forEach(radio => {
        radio.addEventListener("change", function () {
            if (this.value === "married") {
                marriedLastNameDiv.style.display = "block";
            } else {
                marriedLastNameDiv.style.display = "none";
            }
        });
    });
    
    document.getElementById('birth-btn').addEventListener("click", function (event) {
        const selectedSex = [...sexRadios].find(r => r.checked)?.value || '';
        const selectedMarital = [...maritalRadios].find(r => r.checked)?.value || '';
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

        if (selectedSex === "female" && !selectedMarital) {
            event.preventDefault();
            swal("Warning", "Please select their civil status.", "warning");
            return;
        }

        if (selectedSex === "female" && selectedMarital === "married") {
            const marriedLastName = document.getElementById('married-last-name').value.trim();
            if (!marriedLastName) {
                event.preventDefault();
                swal("Warning", "Please enter their married last name.", "warning");
                return;
            }
        }
    });

    document.getElementById("birth-back-btn").addEventListener("click", function(event) {
        event.preventDefault(); 
        window.history.back();
    });
});

    



