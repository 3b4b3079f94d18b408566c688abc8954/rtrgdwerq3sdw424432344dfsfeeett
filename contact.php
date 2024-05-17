<?php
include("header.php");
?>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact" action="" method="POST" name="contact-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="officeaddress" id="officeaddress" type="text" placeholder="Office Address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="contactnumber" id="contactnumber" type="text" placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" id="submit" class="button button boxed-btn">Send</button>
                    </div>
                </form>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script >
                        const scriptURL = 'https://script.google.com/macros/s/AKfycbxpWiI69F9FCcu8IVSNj6B3LFtiUtp8-ygSeRq6d8Z9fLCge3CUCIWPyG98Q5kvIQtI/exec';

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

                    </script>

                <?php
                require_once('db_connect.php');

                if (!empty($_POST)) {
                    $name            =  $_POST['name'];
                    $email           =  $_POST['email'];
                    $officeaddress   =  $_POST['officeaddress'];
                    $contactnumber   =  $_POST['contactnumber'];
                    $subject         =  $_POST['subject'];


                    $sql = "INSERT INTO contact(`name`,`email`,`officeaddress`,`contactnumber`,`subject`)
                            VALUES('$name','$email','$officeaddress','$contactnumber','$subject')";
                    $result = mysqli_query($conn, $sql);
                }

                ?>

            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>1shipping.in</h3>
                        <p>No 15/1031 PKM Centre, Athani Junction Kochi, India-682030.</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+919037850541</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>sales@1shipping.in</h3>
                        <p>Send us your enquery anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact_action_area  -->
<div class="contact_action_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-md-6">
                <div class="action_heading">
                    <h3>We Will Contact You Soon</h3>
                    <p>Thank you for reaching out to us! We appreciate your interest. Our team will be in touch with you shortly to discuss your needs and provide assistance.</p>
                    <!-- You can also add a contact form here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================ contact section end ================= -->
<?php
include("footer.php");
?>