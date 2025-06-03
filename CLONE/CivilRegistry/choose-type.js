const docBtn = document.querySelectorAll('.document-type button');

let selectedDocument = '';

docBtn.forEach(button => {
    button.addEventListener('click', function(){
        docBtn.forEach(btn => btn.classList.remove('selected'));

        this.classList.add('selected');

        selectedDocument = this.textContent.trim();
        console.log("Selected document:", selectedDocument);
    })
})

document.getElementById('type-back-btn').onclick = function (){
    window.history.back();
}

document.getElementById('choose-type-submit').onclick = function (){
   const keepCheck = document.getElementById('TermsandPolicy').checked;

     if(!keepCheck){
        swal("Invalid Request", "Please Agree with Terms and Policy", "warning");
        return;
    }

    if(selectedDocument == "Birth Certificate"){
        window.location.href = 'birth-certificate.php';
    }
    else if (selectedDocument == "Marriage Certificate"){
        window.location.href = 'marriage-certificate.php';
    }
    else if(selectedDocument == "Death Certificate"){
        window.location.href ='death-certificate.php';
    }
    else if(selectedDocument == "Cenomar"){
        window.location.href ='../CENOMAR/personalinfo.php';
    }
    else{
        swal("Invalid Request", "Please choose type of document", "warning");
    }

}