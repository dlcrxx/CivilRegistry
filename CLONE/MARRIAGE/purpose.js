document.addEventListener("DOMContentLoaded", function() {
  const selectPurpose = document.getElementById("selectPurpose");
  const otherContainer = document.getElementById("otherPurposeContainer");

  selectPurpose.addEventListener("change", function () {
    if (this.value === "Others") {
      otherContainer.classList.remove("hidden");
    } else {
      otherContainer.classList.add("hidden");
    }
  });
});
