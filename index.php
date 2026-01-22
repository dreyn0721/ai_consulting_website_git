<?php
date_default_timezone_set('America/New_York');
error_reporting(E_ALL);

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dreyn";


// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);


session_start();

if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = 0;
}










if( isset( $_POST['action'] ) && $_POST['action'] == "entry" ){
  $current_time = date('m/d/Y H:i:s');


  $errors = [];

  if( isset($_POST['firstname']) && $_POST['firstname'] ){
    $firstname = $_POST['firstname'];
  } else {
    $errors[] = "first name cannot be empty.";
  }

  if( isset($_POST['lastname']) && $_POST['lastname'] ){
    $lastname = $_POST['lastname'];
  } else {
    $errors[] = "last name cannot be empty.";
  }

  if( isset($_POST['email']) && $_POST['email'] ){
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid Email Format";
    }

  } else {
    $errors[] = "Email cannot be empty.";
  }


  if( isset($_POST['phone']) && $_POST['phone'] ){
    $phone = $_POST['phone'];

  } else {
    $errors[] = "Phone cannot be empty.";
  }


  if( isset($_POST['messagedata']) && $_POST['messagedata'] ){
    $messagedata = $_POST['messagedata'];

  } else {
    $errors[] = "Message cannot be empty.";
  }





  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;

  } else {
    //insert data and return success

       $sql = "INSERT INTO virtualdominance 
      (
        firstname, 
        lastname,
        phone,
        email,
        messagedata,
        datetimeinserted
      ) 
      VALUES 
      (
        '$firstname', 
        '$lastname', 
        '$phone', 
        '$email', 
        '$messagedata', 
        '$current_time'
      ) 
      ";
        
        if ($conn->query($sql) === TRUE) {
          echo "success";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }



  }




  

  exit();
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Virtual Dominance</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="favicon.ico">



  <script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">



  
</head>
<body>

<header class="navbar">
  <div class="logo">
    <img src="logo.png" class="site-logo" alt="Virtual Dominance Logo">
  </div>
  
</header>

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

      <span class="btn-text submit-btn">Send Message</span>

  </form>
</section>

<footer class="footer">
  <div class="footer-grid">

    <div>
      <img src="logo.png" class="site-logo" alt="Virtual Dominance Logo">
      <p>
        Virtual Dominance IT consulting company delivering innovative digital solutions
        across industries worldwide.
      </p>
    </div>

    <div>
      <h4>Services</h4>
      <ul>
        <li>Cloud Services</li>
        <li>Data Analytics</li>
        <li>Application Development</li>
        <li>AI & Automation</li>
      </ul>
    </div>

    <div>
      <h4>Company</h4>
      <ul>
        <li>About Us</li>
        <li>Careers</li>
        <li>Partners</li>
        <li>Contact</li>
      </ul>
    </div>

    <div>
      <h4>Contact</h4>
      <ul>
        <li>Email: info@Virtual Dominance.com</li>
        <li>Phone: +1 000 000 0000</li>
        <li>Global Locations</li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    © 2026 Virtual Dominance Company. All rights reserved.
  </div>
</footer>























<template id="typing-template">
  <div class="message bot typing">
    <span></span>
    <span></span>
    <span></span>
  </div>
</template>

<div id="chat-toggle">
  🤖
</div>

<!-- Chatbox -->
<div id="chatbox">
  <div class="chat-header">
    <div class="chat-title">
      <span class="dot"></span> AI Assistant
    </div>
    <button id="close-chat">✕</button>
  </div>

  <div id="chat-messages"></div>

  <div class="chat-input">
    <input type="text" id="user-input" placeholder="Ask me anything..." />
    <button onclick="sendMessage()">➤</button>
  </div>
</div>


<script>


const toggle = document.getElementById("chat-toggle");
const chatbox = document.getElementById("chatbox");
const closeBtn = document.getElementById("close-chat");
const messages = document.getElementById("chat-messages");

let introShown = false;

function showIntro() {
  if (introShown) return;

  const introText =
    "👋 Hi! I’m your AI assistant.\n" +
    "I can help answer questions and guide you.\n" +
    "How can I help you today?";

  addMessage(introText, "bot");
  introShown = true;
}

toggle.onclick = () => {
  chatbox.style.display = "flex";
  setTimeout(showIntro, 500); // slight delay for smooth UX
};

closeBtn.onclick = () => {
  chatbox.style.display = "none";
};

function addMessage(text, sender) {
  const msg = document.createElement("div");
  msg.textContent = text;
  msg.style.margin = "6px 0";
  msg.style.textAlign = sender === "user" ? "right" : "left";
  messages.appendChild(msg);
  messages.scrollTop = messages.scrollHeight;
}



async function sendMessage() {
  const input = document.getElementById("user-input");
  const message = input.value.trim();
  if (!message) return;

  addMessage(message, "user");
  input.value = "";

  // Add typing animation
  const template = document.getElementById("typing-template");
  const typingIndicator = template.content.cloneNode(true);
  const typingEl = typingIndicator.firstElementChild;
  messages.appendChild(typingEl);
  messages.scrollTop = messages.scrollHeight;

  const response = await fetch("chat.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({ message })
  });

  const data = await response.json();

  // Remove typing animation
  typingEl.remove();

  //DEV
  console.log( data );


  addMessage(data.reply || "API ERROR: "+ data.error, "bot");
}
</script>

















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
</body>
</html>
