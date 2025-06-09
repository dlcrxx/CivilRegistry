document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach((dropdown) => {
        const toggle = dropdown.querySelector(".dropdown-toggle");
        const box = dropdown.querySelector(".dropdown-box");

        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            // Close all dropdowns first
            document.querySelectorAll(".dropdown-box").forEach(b => {
                if (b !== box) b.style.display = "none";
            });
            // Toggle current dropdown
            box.style.display = box.style.display === "block" ? "none" : "block";
        });
    });

    // Hide all dropdowns when clicking outside
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown-box").forEach(box => {
                box.style.display = "none";
            });
        }
    });

    //OrderButton-index
    document.getElementById("btn-order").addEventListener("click", function () {
    const appointment = document.getElementById("appointment");
    const orderButton = document.getElementById("btn-order");

    appointment.classList.add("show");
    orderButton.style.display = "none";
});

//birth certificates
document.getElementById("birth-certificate").onclick = function (){
    window.location.href = "choose-for.php";
}

//marriage cert
document.getElementById("marriage-certificate").onclick = function() {
    window.location.href = "choose-for.php";
}

document.getElementById("death-certificate").onclick = function(){
    window.location.href = "choose-for.php";
}

document.getElementById("cenomar").onclick = function(){
    window.location.href = "choose-for.php";
}

 document.getElementById('login-icon').addEventListener('click', () => {
        document.getElementById('login-popup').style.display = 'flex';
        showForm('login-form');
    });

document.getElementById('close-login').addEventListener('click', () => {
    document.getElementById('login-popup').style.display = 'none';
});

window.addEventListener('click', (event) => {
    const popup = document.getElementById('login-popup');
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});
});

document.getElementById("btn-return").onclick = function (){
    window.history.back();
}

function showForm(formId) {
    document.querySelectorAll('.popup-content').forEach(form => {
        form.classList.remove('active');
    });
    document.getElementById(formId).classList.add('active');
}