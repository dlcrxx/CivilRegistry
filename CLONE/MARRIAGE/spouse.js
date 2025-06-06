document.addEventListener('DOMContentLoaded', () => {
  const firstNameLabel = document.getElementById('spouse-first-name-label');
  const middleNameLabel = document.getElementById('spouse-middle-name-label');
  const lastNameLabel = document.getElementById('spouse-last-name-label');
  const infoLabel = document.getElementById('spouse-information');

  if (userSex === 'male') {
    firstNameLabel.textContent = "Your Wife's Name";
    middleNameLabel.textContent = "Your Wife's Middle Name";
    lastNameLabel.textContent = "Your Wife's Last Name";
    infoLabel.textContent = "Wife Information"
  } else if (userSex === 'female') {
    firstNameLabel.textContent = "Your Husband's Name";
    middleNameLabel.textContent = "Your Husband's Middle Name";
    lastNameLabel.textContent = "Your Husband's Last Name";
    infoLabel.textContent = "Husband Information"
  }

  document.getElementById('spouse-btn').addEventListener("click", function (event) {
      const spouseFirstName = document.getElementById('spouse-first-name').value.trim();
      const spouseMiddleName = document.getElementById('spouse-middle-name').value.trim();
      const spouseLastName = document.getElementById('spouse-last-name').value.trim();

      if(!spouseFirstName || !spouseMiddleName || !spouseLastName){
        event.preventDefault();
        swal("Warning", "Please fill in all required fields.", "warning");
        return;
      }
  })

  document.getElementById('spouse-back-btn').onclick = function(){
    window.history.back();
  }
});



