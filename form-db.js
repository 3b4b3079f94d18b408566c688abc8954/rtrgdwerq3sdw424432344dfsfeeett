const scriptURL = 'https://script.google.com/macros/s/AKfycbwRasIR1M8VTxYdxXCH-Krm0tN7Q07m08LuVhUqgSjkB2GqWQyYQ3YFbkQWP2YXn5ZoWQ/exec';

const form = document.forms['contact-form'];

form.addEventListener('submit', e => {
  e.preventDefault();
  
  // Check if any field is empty
  let formIsValid = true;
  form.querySelectorAll('input').forEach(input => {
    if (!input.value.trim()) {
      formIsValid = false;
    }
  });

  if (!formIsValid) {
    // Show alert message if any field is empty
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Please fill out all fields!',
    });
    return;
  }

  fetch(scriptURL, { 
    method: 'POST', 
    body: new FormData(form)
  })
  .then(response => {
    if (response.ok) {
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Thank you! Your form is submitted successfully.',
        showConfirmButton: false,
        timer: 2000 // Auto close after 2 seconds
      }).then(() => {
        window.location.reload();
      });
    } else {
      throw new Error('Network response was not ok.');
    }
  })
  .catch(error => {
    console.error('Error!', error.message);
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
    });
  });
});
