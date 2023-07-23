<?php
include('header.php');
?>

<div class="banner1">
            <div class="slider1">
            <img src="https://main.d1mbqzjk44zhl3.amplifyapp.com/static/media/mayurStockyard.cfe5acf55d244f4807ac.jpg" alt="">
            </div>
          <div class="overlay1">  
          <div class="content1" style="margin-top:90px;">
          <h1 style="color:white; font-weight:bolder; text-align:center;">CONTACT US</h1>
            </div>  
            </div>
        </div>

<div class="container">
  <div class="row">
  <div class="container-contact100">
<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
<button class="contact100-btn-show">
<i class="fa fa-envelope-o" aria-hidden="true"></i>
</button>
<div class="wrap-contact100">
<button class="contact100-btn-hide">
<i class="fa fa-close" aria-hidden="true"></i>
</button>
<form class="contact100-form validate-form" action="connection.php" method="post">
<span class="contact100-form-title">
Contact Us
</span>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
<span class="label-input100">Your Name</span>
<input class="input100" type="text" name="name" placeholder="Enter your name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<span class="label-input100">Email</span>
<input class="input100" type="text" name="email" placeholder="Enter your email addess">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Message is required">
<span class="label-input100">Message</span>
<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<button class="contact100-form-btn" value="submit1" name="submit1" type="submit">
<span>
Submit
<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
<span class="contact100-more">
For any question contact our 24/7 call center: <span class="contact100-more-highlight">+001 345 6889</span>
</span>
</div>
</div>
<div id="dropDownSelect1"></div>
  </div>
</div>























<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>

<script src="assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7df9d7813894eca4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>







    

<?php
include('footer.php');
?>