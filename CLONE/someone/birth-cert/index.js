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
});


