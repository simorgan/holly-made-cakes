<?php
$title = 'The Treat Box, available for hire offring fresh local produce alongside a variety of cakes.';
$page = 'index.php';
include('inc/header.php');
include('mail-contact.php');
?>

  <section class="treat-box-container">
    <div class="over-lay">

      <h1 class="treat-h1">Treat Box</h1>

        <article>
          <div class="treat-content">
              <p>This adorable mobile unit provides a unique sense of occasion to any event,
              and an unforgettable experience for your guests. Working with likeminded 
              suppliers in the West Country ensuring to use fresh local produce, 
              we specialise in serving afternoon teas, home baked cakes and speciality teas.
              </p>
            <div class="images">
              <img src="images/treat-box/img1.jpg" alt="">
              <img src="images/treat-box/img8.jpg" alt="">
              <img src="images/treat-box/img2.jpg" alt="">
              <img src="images/treat-box/img6.jpg" alt="">
            </div>
          </div>
        </article>
        <article class="treat-contact">
          <p>Our Treat Box is available for hire. Perfect for weddings, parties and birthdays,
            or if you are organising a fete or village day. Please drop us a message using the 
            contact form below for more information.
          </p>
            <div class="contact-form-treat-box content-box" id="contactForm">

            <h2>Contact Us</h2>
            <p class="alert alert-success" id="confirmHidden">Thank you for your inquiry, we will be in contact shortly.</p>
                <form id="contactFormDisplay" method="POST">
                  <label for="inputName">Name</label>
                  <p class="alert-danger hiddenError" id="name">Please enter you name.</p>
                  <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter Name">
                  
                  <label for="inputContactNum">Contact Number</label>
                  <p class="alert-danger hiddenError" id="contactNum">Please enter your contact number.</p>
                  <input type="tel" class="form-control" name="contactNumber" id="inputContactNum" placeholder="Enter Contact Number">
                  
                  <label for="inputEmail">Email address</label>
                  <p class="alert-danger hiddenError" id="email">Please enter your email address.</p>
                  <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
                  
                  <label for="inputMessage">Message</label>
                  <p class="alert-danger hiddenError" id="message">Please include your inquiry.</p>
                  <textarea class="form-control" name="message" rows="6" id="inputMessage" placeholder="Enter your message..."></textarea>
                  <p class="alert-danger hiddenError" id="noCheck">Please confirm you arrgee to the terms of service!</p>  
                  
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input checkbox-pad" name="checkBox" id="checkBox" >
                      <label class="form-check-label" for="checkBox">I have read and agree to the <a href="/privacy.php"> Privacy Policy</a></label>  
                    </div>
                  <input type="hidden" name="contact-type" value="Treat Box" id="treat-box-contact">
                  <input type="submit" name="contactSubmited" id="submitContact" class="btn btn-primary" >
                </form>

            </div>


        </article>
    </div>
  </section>
</div>
<?php
include('inc/inc-script.php');

include('inc/footer.php');
?>