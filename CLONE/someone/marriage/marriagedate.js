document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('marriage-submit-btn').addEventListener('click', function(event){
        const dateOfMarriage = document.querySelector('input[type="date"]').value;

        if(dateOfMarriage == ""){
            event.preventDefault();
            swal("Warning", "Please input the date of your marriage", "warning");
            return;
        }
    })

    document.getElementById('marriage-back-btn').addEventListener('click', function (event) {
        event.preventDefault(); 
        window.history.back();
    });
})


