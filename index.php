<?php
include('inc/header.php');
include('mail-contact.php')
?>


<section>
<!-- website intro start -->
<article class="intro">
    
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
     nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
     reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
     pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
     culpa qui officia deserunt mollit anim id est laborum."</p>
<!-- asside starts -->
<aside>
    <!-- slidesshow start -->
<div class="slideshow">
    <!-- slide start -->
    <div class="slides">
        <!-- radio buttons start -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- radio buttons end -->
        <!--slide images start  -->
        <div class="slide first">
            <img src="images/home-slider/cake1.jpg" alt="">
            <h1>cake test</h1>
        </div>
        <div class="slide">
            <img src="images/home-slider/cake2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/home-slider/cake3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/home-slider/cake4.jpg" alt="">
        </div>
        <!--slide images end -->
        <!-- auto slide start -->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
        <!-- auto slide end --> 

    </div>
    <!-- slide end -->
    <!-- manual navigation start -->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!-- manual navigation end -->
</div>
<!-- slideshow end -->


</aside>
<!-- aside end -->

</article>
</section>
<!-- website intro end -->

<section>
<!-- meet holly section start -->
<article id="meet-holly">
<h1 class="meet-holly">Meet Holly<img src="images/whisk.jpg" alt=""></h1>
<img class="holly-image" src="images/holly.jpg" alt="">
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
    officia deserunt mollitia animi, id est laborum et dolorum fuga."</p>
</article>

</section>
<!-- meet holly section end -->
<!-- cakes section start -->
<section id="cakes">
<h1 class="cakes"><img src="images/whisk.jpg" alt="">Cakes</h1>
<!-- celebration cakes article start -->
<article class="celebration-cakes">
<h2 >Celebration Cakes</h2>
<div class="box-content-pleft">
    <img src="images/celebration-cake.jpg" alt="">
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
    quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
    nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat."</p>
    </div>
</article>
<!-- celebration cakes article end -->
<!-- wedding cakes article start -->
<div id="wedding-cakes-anchor"></div>
<article class="wedding-cakes">

<h2 id="wedding-cakes">Wedding Cakes</h2>
<div class="box-content-pright">
<img src="images/wedding-cake.jpg" alt="">
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
    quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
    nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat."</p>

  

</div>
</article>
<!-- wedding cakes article end -->
<!-- cup cakes article start -->
<div id="cup-cakes-anchor"></div>
<article class="cup-cakes">
<h2 id="cup-cakes">Cup Cakes</h2>
<div class="box-content-pleft">
    <img src="images/cup-cakes.jpg" alt="">
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
    quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
    nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat."</p>
    </div>
</article>
<!-- cup cakes article end -->
<!-- tray bakes article starts -->
<article class="tray-bakes">
<h2 id="tray-bakes">Tray Bakes</h2>
<div class="box-content-pright">
    <img src="images/tray-bakes.jpg" alt="">
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum 
    quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
    nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat."</p>
    </div>
</article>
<!-- tray bakes article end -->

<!-- cakes section end -->


<!-- contact form start -->
<div class="contact-form content-box" id="contactForm">
 
<h2>Contact Us</h2>
<p class="alert alert-success" id="confirmHidden">Thank you for your inquiry, we will be in contact shortly.</p>
<form id="contactFormDisplay" method="POST" >
  <div class="form-group">

 
    <label for="InputName">Name</label>
    <p class="alert-danger hiddenError" id="name">Please enter you name.</p>
    <input type="text" class="form-control" name="name" id="inputName" aria-describedby="Contact Name" placeholder="Enter Name">
    
    <label for="InputNumber">Contact Number</label>
    <p class="alert-danger hiddenError" id="contactNum">Please enter your contact number.</p>
    <input type="tel" class="form-control" name="contactNumber" id="inputContactNum" aria-describedby="emailHelp" placeholder="Enter Contact Number">
    
 
    <label for="exampleInputEmail1">Email address</label>
    <p class="alert-danger hiddenError" id="email">Please enter your email address.</p>
    <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>



 
    <label for="exampleInputPassword1">Message</label>
    <p class="alert-danger hiddenError" id="message">Please include your inquiry.</p>
    <textarea type="text" class="form-control" name="message" rows="6" id="inputMessage" placeholder="Enter your message..."></textarea>
    <p class="alert-danger hiddenError" id="noCheck">Please confirm you arrgee to the terms of service!</p>  
  <div class="form-check">
  
  <input type="checkbox" class="form-check-input" name="checkBox" id="checkBox" >
    <label class="form-check-label" for="checkBox">I have read and agree to the <a href="#"> terms of service</a></label>  
  </div>
<input type="submit" name="contactSubmited" id="submitContact" class="btn btn-primary" >
  <!-- <button type="submit" name="contactSubmited" id="submitContact" class="btn btn-primary">Submit</button> -->
</form>

</div>

</div>

<!-- contact form end -->

</section>


<!-- include body scripts -->
<?php
include('inc/inc-script.php');

include('inc/footer.php');
?>




</body>
</html>