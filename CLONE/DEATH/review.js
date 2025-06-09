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
        ...(sex.toLowerCase() === "female" ? [
            "Marital Status: " + maritalStatus,
            "Married Last Name: " + marriedLastName
        ] : []),
        "Birthday: " + birthday,
        "Type of ID: " + idType
    ]);

    // Deceased's Information Section
    addSection("Deceased's Information", [
        "First Name: " + relativeFirst,
        "Middle Name: " + relativeMiddle,
        "Last Name: " + relativeLast
    ]);

    addSection("Father's Information",
        noFather === 'yes' ? ["No Father's Name on Certificate: Yes"] : [
            "Father's First Name: " + fatherFirst,
            "Father's Middle Name: " + fatherMiddle,
            "Father's Last Name: " + fatherLast
        ]
    );

    addSection("Mother's Information", [
        "Mother's Marital Status: " + motherStatus,
        "Mother's First Name: " + motherFirst,
        "Mother's Maiden Middle Name: " + motherMiddle,
        "Mother's Maiden Last Name: " + motherLast
    ]);

    addSection("Birth Place", [
        "Birth Country: " + birthCountry,
        "Birth Province: " + birthProvince,
        "Birth Municipal: " + birthMunicipal
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
