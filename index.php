<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>Alpha Uno Athletics</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">-->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">
    <link href="fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet"> 

  <link rel="stylesheet" href="css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <!-- =======================================================

  ======================================================= -->
<style>
    
    #testimonials2 {
    background-image: url(img/testimonial/Testimonial-bg.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-color:black; 
    }
    .top-reasons{

    font-size: 70px;
}
    
header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="index.php"><img data-0="width:100px;" data-300=" width:50px;" src="img/logo.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#section-about">About</a></li>
          <li><a href="#section-works">Portfolio</a></li>
          <li><a href="#section-contact">Contact</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
   
    <div class="intro-content">
               <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="img/work.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
      </div>
    </div>
  </div>
      <!--<h2>Alpha Uno Athletics</h2>
      <h3>Invest in yourself</h3>
        
        
      <div>
        <a href="#section-contact" class="btn-get-started scrollto">Get Started</a>
      </div>-->
        
       
    </div>
       
  </section>

    
    
    

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <i class="fas fa-dumbbell top-reasons"></i>

            </div>
          </div>
          <h3 class="text-bold">Intense</h3>
          <p>"I didn't realize how much I was losing until I put on my mom's shirt!"
              </p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <i class="fas fa-heartbeat top-reasons"></i>
            </div>
          </div>
          <h3 class="text-bold">Professional</h3>
          <p>"A good coach prioritizes your health first..."</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <i class="fas fa-hand-holding-heart top-reasons"></i>
            </div>
          </div>
          <h3 class="text-bold">Personal</h3>
          <p>"I can't express enough how grateful I am to have you as a coach and friend"</p>

          <div class="clear"></div>
        </div>

      </div>
      
        

      </div>
  </section>

  <!-- spacer section:testimonial -->
  <!--
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20" style="height: 500px;">
                    </div>
                   
                    <br/>
                    <!--<span class="author">&mdash; SARAH DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial2.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
												</h5>
                    <br/>
                    <span class="author">&mdash; NICOLE DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial3.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
                    <br/>
                    <span class="author">&mdash; DASON KRUN <a href="#">www.siteurl.com</a></span>
                  </div>
                </li> 
              </ul>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </section>
-->

  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Behind Alpha Uno</h2>
            <p>What makes us unique</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-6">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/rj.png" alt="" style="width:50%"></figure>
            <div class="team-detail">
              <h4>Rodney Martin Jr.</h4>
              <span>Owner/Founder</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/veronica.png" alt="" style="width:50%"></figure>
            <div class="team-detail">
              <h4>Veronica Rodarte</h4>
              <span>CEO/Manager</span>
            </div>
          </div>
        </div>
          <!--
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member3.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Vicky Tan</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member4.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Kevin Peterson</h4>
              <span>UI designer</span>
            </div>
          </div>
        </div>-->
      </div>

    </div>
  </section>
  <!-- /about -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-user fa-5x"></i>
            </div>
            <strong id="counter-coffee" class="number">826345</strong><br>
            <span class="text">Squats</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-plus fa-5x"></i>
            </div>
            <strong id="counter-music" class="number">293784</strong><br>
            <span class="text">Snatches</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-clock-o fa-5x"></i>
            </div>
            <strong id="counter-clock" class="number">190938</strong><br>
            <span class="text">Dumbell Swings</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-heart fa-5x"></i>
            </div>
            <strong id="counter-heart" class="number">30</strong><br>
            <span class="text">Lives Changed</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p></p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*">All</a></li>
            <!--<li><a href="#" class="btn btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".print">Print</a></li> -->
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img1.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img2.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img3.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img4.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img5.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img6.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#"></a></h5>
                      <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <!--<article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img7.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img8.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img9.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article> -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
     <section id="testimonials2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <!--<img alt="" src="img/testimonial/testimonial2.png" class="img-circle">-->
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												I joined Alphaunoathletics in March of this year. I started training with Rodney twice a week, and following a meal plan that Veronica recommended. Veronica and Rodney form a great team. They continuously pushed me to do my best, and to not give up and get too comfortable. Since I started the program , I’ve had significant gains- the main one is being taken off high blood pressure medication that I was on for 8 years.
												</h5>
                    <br/>
                    <span class="author">&mdash; Anonymous </span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <!--<img alt="" src="img/testimonial/testimonial2.png" class="img-circle">-->
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												I just want to express how excited and happy I’am with the results I’ve obtained since training with Rodney. Came in at 192 told him what I wanted to accomplish and I’m down to 165. He made sure we pulled trough with these amazing results! All accomplished in 3 months! I feel stronger and I definitely would recommend Rodney as a trainer In a heartbeat!"
												</h5>
                    <br/>
                    <span class="author">&mdash; Anonymous </span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Been training with Rodney for over a year. Ever since I began training with him, I have achieved amazing results. He always pushes you to give your best effort even when you feel you can't. I highly recommend training here if you are looking to achieve your fitness goals!
											</h5>
                    <br/>
                    <span class="author">&mdash; Anonymous </span>
                  </div>
                </li> 
                   <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											This is as real and intense as it gets. Rodney don't mess around when it comes to train you. He will push you into your limit. Trust his process because you will do things you never done before and your body will show through time. 
											</h5>
                    <br/>
                    <span class="author">&mdash; Anonymous </span>
                  </div>
                </li> 
              </ul>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </section>

    
    
    
 <!-- <section id="clients" class="section clearfix bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo1.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo2.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo3.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo4.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo5.png">
            </div>
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- map -->
  <section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25309.605370257384!2d-118.36232123567254!3d33.9539921787643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b656274bdd8d%3A0x727b30fdcae3170!2sInglewood%2C%20CA!5e0!3m2!1sen!2sus!4v1569014929738!5m2!1sen!2sus" width="100%" height="500" frameborder="0" style="border:0" ></iframe>
      
  </section>

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>Schedule a 1-1 Training Session!</p>
          </div>
        </div>
     
          
          <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/alphaunoathletics" style="min-width:320px;height:730px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
      </div>

    </div>
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/AlphaUnoAthletics/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook" id="facebookIcon"></i></a></li>
            <!--<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <!--<li><a href="#">Privacy policy</a></li>-->
          <li><a href="">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; Alpha Uno Athletics All rights reserved</p>
        </div>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</body>

</html>
