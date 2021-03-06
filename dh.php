<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>dheeraj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #1aa3ff;
    color: #000000;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #000000;
    font-size: 50px;
  }
  .logo {
    color: #ff6600;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #000000;
  }
  .carousel-indicators li {
    border-color: #000000;
  }
  .carousel-indicators li.active {
    background-color: #000000;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #0000ff; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #0000ff;
    background-color: #000000 !important;
    color: #0000ff;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #0000ff !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #0000ff;
    color: #000000;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #0000ff;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #0000ff !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #0000ff;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">GEC KARWAR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SUBJECTS</a></li>
        <li><a href="#portfolio">GALLERY</a></li>
        <li><a href="#syllabus">SYLLABUS</a></li>
         <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>DEPT OF ELECTRONICS & COMMUNICATION ENGINEERING</h1> 
  <p>SPECIALISED IN SEMICONDUCTORS & TRANSISTORS</p> 
  
</div>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About ece engineering</h2><br>
      <h4>Electronic and communication engineering is an electrical engineering discipline which utilizes 
      nonlinear and active electrical components such as semiconductor devices,especially transistors,diodes and integrated 
    circuits to design electronic circuits,devices,VLSI devicesand their systems.</p>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Dept of EC is a branch of GEC karwar its mission is to provide excellence in education,research and public service.To provide quality education and make students entrepreneur and employable.Continuous upgradation of techniques for reacher the height of excellence</h4><br>
      <p><strong>VISION:</strong> The vision of ECE department is to become pioneer in higher education and to produce creative,talented engineer's.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SUBJECTS</h2>
  <h4> We learn</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-transfer logo-small"></span>
      <h4>Analog circuits</h4>
      <p>Transistors,amplifiers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-stats logo-small"></span>
      <h4>Digital circuits</h4>
      <p>IC's,Flipflops</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-pencil logo-small"></span>
      <h4>Network analysis</h4>
      <p>Network reduction</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo-small"></span>
      <h4>Signals</h4>
      <p>Signal & system</p>
    </div>
    <div class="col-sm-4">
      <span class=" glyphicon glyphicon-picture logo-small"></span>
      <h4>Digital signal processing</h4>
      <p>DFT and IDFT</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4 style="color:#303030;">Microprocessors</h4>
      <p>8051 microprocessor</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Gallery</h2><br>
  <h4>WHAT WE LEARN IN ECE</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/11.jpg" alt="Paris" width="400" height="300">
        <p><strong>SIGNAL PROCESSING</strong></p>
        <p>We study various types of signal and their behavior</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/12.jpg" alt="New York" width="400" height="300">
        <p><strong>DIGITAL CIRCUITS</strong></p>
        <p>We study the discrete signal using IC's</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/13.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>VLSI SYSTEMS</strong></p>
        <p>We study about the VLSI systems which are used in computers</p>
      </div>
    </div>
  </div><br>

<div id="syllabus" class="container-fluid text-center">
  <h2>SYLLABUS</h2>
  <h4>Download from below</h4>
  <div class="row slideanim">
    <div class="col-sm-4">
    <a href="https://vtu.ac.in/wp-content/uploads/2019/12/B.E-in-Electronics-and-Communication-updated-on-10.08.2018-syla.pdf">
   <span class="glyphicon glyphicon-save-file logo-small"></span>
   </a>
      <h4>2015</h4>
    </div>
      <div class="row slideanim">
        <div class="col-sm-4">
          <a href="https://vtu.ac.in/pdf/cbcs/201718/ecschsyll.pdf">
   <span class="glyphicon glyphicon-save-file logo-small"></span>
   </a>
      <h4>2017</h4>
    </div>
      <div class="row slideanim">
        <div class="col-sm-4">
          <a href="https://vtu.ac.in/wp-content/uploads/2019/12/Electronics-Communication-Engineering-Tentative-syla.pdf">
   <span class="glyphicon glyphicon-save-file logo-small"></span>
   </a>
      <h4>2018</h4>

    </div>
  </div>
</div>
  


  
  


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you </p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Majali, Karwar</p>
      
      <p><span class="glyphicon glyphicon-envelope"></span> ecgeck@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <form action="ddd.html" method="post">
      <div class="row">
        <div class="col-sm-6 form-group"> 
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right"  type="submit">Send</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="   glyphicon glyphicon-menu-up"></span>
  </a>
  <p>Designed and developed by <a href="https://www.instagram.com/its_dheeraj_rv/">Dheeraj Vernekar</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
