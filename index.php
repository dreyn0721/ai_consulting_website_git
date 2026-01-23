<?php
// Vars
$page = "home";
$pagetitle = "Home | AI consultation";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




include("template-parts/header.php");
?>



<section class="hero">
  <h1>Virtual Dominance</h1>
  <h2>Digital Transformation & IT Solutions</h2>
  <p>Helping enterprises innovate, scale, and succeed.</p>
  <!-- <button>Get Started</button> -->
</section>


<section id="capabilities" class="section light">
  <h2 class="center-title">
    Accelerating business clockspeeds using cutting-edge information
    technologies and exceptional talent
  </h2>

  <div class="grid capability-grid">

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
    </div>

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Ut enim ad minim veniam quis nostrud exercitation.</p>
    </div>

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Duis aute irure dolor in reprehenderit voluptate.</p>
    </div>

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Excepteur sint occaecat cupidatat non proident.</p>
    </div>

    <div class="card capability-card">
      <img src="https://dummyimage.com/60x60/000/fff" alt="">
      <h4>Lorem Ipsum</h4>
      <p>Sunt in culpa qui officia deserunt mollit anim.</p>
    </div>

  </div>
</section>



<section id="accelerate" class="section accelerate">
  <div class="accelerate-container">

    <div class="accelerate-text">
      <h2>
        Accelerating business clockspeeds using cutting-edge information
        technologies and exceptional talent
      </h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur.
      </p>
    </div>

    <div class="accelerate-image">
      <img src="https://dummyimage.com/500x400/000/fff" alt="Dummy Technology Image">
    </div>

  </div>
</section>






<section id="partners" class="section">
  <h2>Our Partnership & Alliance</h2>
  <p class="section-subtitle">
    We collaborate with global technology leaders to deliver innovative solutions.
  </p>

  <div class="grid partners-grid">
    <div class="card partner-card">
      <img src="https://dummyimage.com/160x80/000/fff" alt="Partner Logo">
    </div>
    <div class="card partner-card">
      <img src="https://dummyimage.com/160x80/000/fff" alt="Partner Logo">
    </div>
    <div class="card partner-card">
      <img src="https://dummyimage.com/160x80/000/fff" alt="Partner Logo">
    </div>
    <div class="card partner-card">
      <img src="https://dummyimage.com/160x80/000/fff" alt="Partner Logo">
    </div>
  </div>
</section>





<section id="services" class="section">
  <h2>Our Services</h2>
  <div class="grid">
    <div class="card">Cloud & DevOps</div>
    <div class="card">Data & Analytics</div>
    <div class="card">Application Development</div>
    <div class="card">AI & Automation</div>
  </div>
</section>

<section id="industries" class="section light">
  <h2>Industries We Serve</h2>
  <div class="grid">
    <div class="card">Healthcare</div>
    <div class="card">Banking & Finance</div>
    <div class="card">Retail</div>
    <div class="card">Manufacturing</div>
  </div>
</section>


<section id="vd-way" class="section light vd-way">
  <div class="vd-container">

    <div class="vd-text">
      <h2>The Virtual Dominance IT Way</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur.
      </p>
    </div>

    <div class="vd-image">
      <img src="https://dummyimage.com/500x400/000/fff" alt="Dummy Process Image">
    </div>

  </div>
</section>




<section id="about" class="section">
  <h2>About Us</h2>
  <p>
    We are a technology consulting company delivering innovative
    digital solutions to global enterprises.
  </p>
</section>

<section id="contact" class="section light">
  <h2>Contact Us</h2>
  <p class="section-subtitle">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Get in touch with us.
  </p>

  <form id="contactForm" class="contact-form main-form">


    <div class="response-container">
      
    </div>

    <input type="text"  placeholder="First Name" class="firstname" />
    <input type="text"  placeholder="Last Name *" class="lastname" />

    <div class="form-row">
      <input type="tel" id="phone" placeholder="Phone Number" class="phone" />
      <input type="email" id="email" placeholder="Email Address *" class="email" />
    </div>


    <textarea id="message" rows="5" placeholder="Your Message *" class="message-data w-100 m-0 p-0"></textarea>

      <span class="btn-text submit-btn mt-2 d-inline-block">Send Message</span>

  </form>
</section>













<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var phone = jQuery(".main-form .phone").val();
      var email = jQuery(".main-form .email").val();
      var messagedata = jQuery(".main-form .message-data").val();


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          messagedata: messagedata

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");
            jQuery(".main-form .message-data").val("");

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>

<script src="assets/script.js" crossorigin="anonymous"></script>

<?php include("template-parts/footer.php"); ?>
