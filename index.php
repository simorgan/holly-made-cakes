<?php
include('inc/header.php');
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
</section>
<!-- cakes section end -->



<!-- include body scripts -->
<?php
include('inc/contact.php');
include('inc/inc-script.php');

include('inc/footer.php');
?>




</body>
</html>