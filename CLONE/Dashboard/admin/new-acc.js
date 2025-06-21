 document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const name = form.querySelector('input[name="name"]');
    const username = form.querySelector('input[name="username"]');
    const password = form.querySelector('input[name="password"]');
    const role = form.querySelector('select[name="role"]');

    form.addEventListener('submit', function (e) {
      if (
        name.value.trim() === '' ||
        username.value.trim() === '' ||
        password.value.trim() === '' ||
        role.value === ''
      ) {
        e.preventDefault();

        Swal.fire({
          icon: 'warning',
          title: 'Incomplete Form',
          text: 'Please fill out all fields before submitting.',
          confirmButtonColor: '#0066cc'
        });
      }
    });
  });