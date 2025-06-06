document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const birthCountry = document.getElementById('birth-country');
  const birthProvince = document.getElementById('birth-province');
  const birthMunicipality = document.getElementById('birth-municipality');

  form.addEventListener('submit', (e) => {
    if (
      !birthCountry.value.trim() ||
      !birthProvince.value.trim() ||
      !birthMunicipality.value.trim()
    ) {
      e.preventDefault();
      swal("Warning", "Please fill in all required fields.", "warning");
    }
  });

    document.getElementById('birth-place-back').onclick = function (){
        window.history.back();
    };

});


