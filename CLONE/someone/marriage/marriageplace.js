document.getElementById('marriagePlace-submit-btn').addEventListener('click', function (event) {
    const marriageCountry = document.getElementById('marriage-country').value.trim();
    const marriageProvince = document.getElementById('marriage-province').value.trim();
    const marriageMunicipal = document.getElementById('marriage-municipal').value.trim();

    if(!marriageCountry || !marriageProvince || !marriageMunicipal){
        event.preventDefault();
        swal("Warning", "Please fill in all required fields.", "warning");
        return;
    }
});

document.getElementById('marriagePlace-back-btn').onclick = function(){
    window.history.back();
  }
