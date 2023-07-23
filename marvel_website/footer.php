<div class="container-fluid " style="padding: 70px; background-color:#212529;">
    <div class="row makefoot1">
        <div class="col-md-4">
            <div class="container makefoot slide-in-left">
                <div class="row">
                    <img src="" alt="">
                </div>
                <div class="row">
                    <h5>ABOUT ASHWINI MARBLE </h5>
                </div>
                <div class="row">
                    <p> We are specialized in Products like Makrana white marble, Makrana dungri marble, makrana albeta marble, albeto marble,makrana white marble, makrana pure white marble, makrana kumari marble, makrana adanga marble.</p>
                </div>
            </div>
        </div>
        <div class="col-md-2 arrow-list slide-in-left">
            <h5>PAGES</h5>
            <ul>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms and Condition</a></li>
            <li><a href="">Disclaimers</a></li>
            </ul>
        </div>
        <div class="col-md-2 arrow-list slide-in-left">
            <h5>TOP LINK</h5>
            <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Photos</a></li>
            </ul>
        </div>
        <div class="col-md-4 slide-in-left">
            <h5>SOCIAL MEDIA</h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="container socialm">
                <div class="row">
                    <div class="col-md-4">
                    <i class="fa-brands fa-facebook fa-2x"></i>   
                    </div>
                    <div class="col-md-4">
                    <i class="fa-brands fa-instagram fa-2x"></i>
                    </div>
                    <div class="col-md-4">
                    <i class="fa-brands fa-youtube fa-2x"></i>
                    </div>
                </div>
            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



</body>
<style>
       .makefoot h5{
        color:white;
        font-weight: bold;
        cursor: pointer;
        margin: 20px;
    }
    .makefoot p{
        color:white;
        font-weight: 400;
        cursor: pointer;
        margin: 20px;
    }

        .makefoot1 li a{
        color: white;
        cursor: pointer;
    }
    .makefoot1 li {
        margin: 20px auto;
    }
    .makefoot1 h5 {
        margin: 20px ;
        color: white;
        cursor:pointer;
    }
    .arrow-list {
  list-style-type: none;
}

.arrow-list li:before {
  content: '\2192'; /* Unicode for right arrow */
  margin-right: 0.5em;
  color: white;
}
.socialm i{
    color:white;
    background-color: #212529;
}
.socialm i:hover{
    color: black;
    background-color: yellow;
}
.socialm .row > div[class^="col-"] {
    padding-right: 0;
    padding-left: 0;
}
.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 0.5s ease-out, transform 0.5s ease-out;
}
.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  transition: opacity 0.5s ease-out, transform 0.5s ease-out;
}

.slide-in1 {
  opacity: 1;
  transform: translateX(0);
}


.slide-in {
  opacity: 1;
  transform: translateX(0);
}





</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const slideInContainers = document.querySelectorAll('.slide-in-left');
  for (let i = 0; i < slideInContainers.length; i++) {
    const container = slideInContainers[i];
    setTimeout(function() {
      container.classList.add('slide-in');
    }, i * 200); // Delay each container's animation by 200 milliseconds
  }
});
document.addEventListener("DOMContentLoaded", function() {
  const slideInContainers = document.querySelectorAll('.slide-in-right');
  for (let i = 0; i < slideInContainers.length; i++) {
    const container = slideInContainers[i];
    setTimeout(function() {
      container.classList.add('slide-in1');
    }, i * 200); // Delay each container's animation by 200 milliseconds
  }
});



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>