document.getElementById('review-back-btn').onclick = function () {
    window.history.back();
};

document.getElementById('submit-review-btn').onclick = function () {
    window.location.href = "save.php";
};

document.getElementById('download-pdf-btn').onclick = function () {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    let y = 10;

    function addSection(title, items) {
        doc.setFontSize(14);
        doc.setFont("helvetica", "bold");
        doc.text(title, 10, y);
        y += 6;
        doc.setFont("helvetica", "normal");
        doc.setFontSize(11);
        items.forEach(item => {
            doc.text(item, 10, y);
            y += 6;
        });
        y += 4;
    }

    addSection("Personal Information", [
        "Type of Document: " + typeOfDoc,
        "Sex: " + sex,
        "First Name: " + firstName,
        "Middle Name: " + middleName,
        "Last Name: " + lastName,
        "Birthday: " + birthday,
        "Type of ID: " + idType
    ]);

    addSection("Husband Information", [
        "First Name: " + husbandFirst,
        "Middle Name: " + husbandMiddle,
        "Last Name: " + husbandLast
    ]);

    addSection("Wife Information", [
        "First Name: " + wifeFirst,
        "Middle Name: " + wifeMiddle,
        "Last Name: " + wifeLast
    ]);

    addSection("Marriage Date", [
        "Date of Marriage: " + dateOfMarriage
    ]);

    addSection("Marriage Place", [
        "Country: " + marriageCountry,
        "Province: " + marriageProvince,
        "Municipal: " + marriageMunicipal
    ]);

    addSection("Purpose of Request", [
        "Purpose: " + purpose
    ]);

    addSection("Delivery Information", [
        "Recipient Name: " + recipientName,
        "Street Address: " + streetAddress,
        "Subdivision/Building Name: " + subAddress,
        "Barangay: " + barangay,
        "Contact Number: " + contact,
        "Email Address: " + emailAddress,
        "Payment Method: " + payment,
        "Control Number: " + controlNum
    ]);

    doc.save("eSertipiko_Marikina_Review.pdf");
};
