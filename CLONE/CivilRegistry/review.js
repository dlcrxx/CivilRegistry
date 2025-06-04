document.getElementById('review-back-btn').onclick = function (){
    window.history.back();
}

function generateNumericReference(length = 10) {
  let ref = '';
  for (let i = 0; i < length; i++) {
    ref += Math.floor(Math.random() * 10); // Appends a random digit (0-9)
  }
  return ref;
}

function sendMail(){

    let parms ={
        name: recipientName,
        email: emailAddress,
        type_Of_doc: typeOfDoc,
        reference_num: generateNumericReference()
    };

    return emailjs.send('service_u4a8a5w','template_vs4fx9v',parms);
}

document.getElementById('submit-review-btn').onclick = function() {
    sendMail().then(function() {
        // Redirect only after sending the email successfully
        window.location.href = "save.php";
    }).catch(function(error) {
        alert("Email sending failed: " + JSON.stringify(error));
        console.error("EmailJS Error:", error);
    });
};
