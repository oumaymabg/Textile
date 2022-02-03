<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Textile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="home/css/fontawesome.css">
    <link rel="stylesheet" href="home/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="home/css/owl.css">
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Textile</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <li> <a href="{{ url('/product') }}">Dashboard</a></li>
            @else
              <li><a href="{{ route('login') }}">Log in</a></li>
              @if (Route::has('register'))
              <li><a href="{{ route('register') }}">Sign Up</a></li>
              @endif
                    @endauth
              </div>
              @endif
            </ul>
            
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
         
              <div id="search-section">
              	
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    
    <!-- Trusted Ends Here -->


    <!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <center><span><h2>Textile Manufacturing</h2></span></center>
              <h2>Services we provide</h2>
              <p>Host Cloud is a professional Bootstrap 4 template by TemplateMo for your hosting company websites. There are 4 HTML pages included in this template. You can feel free to customize anything. Please share this template to your friends. Thank you.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>10x Light Cloud</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Managed VPS Cloud</h4>
              <p>You are not allowed to re-distribute this template as a downloadable ZIP file on any template collection website. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact us</a> if you want to.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Fully Dedicated</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->


    <!-- Pricing Starts Here -->
    <div class="pricing-section">
      <div class="background-image-pricing">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <h2>Textile</h2>
              <p>Lorem ipsum dolor amet taxidermy sriracha cardigan salvia actually vice migas enamel pin sustainable carry scenester lomo hot chicken farm table actually kinfolk.</p>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-6 col-xs-12">
            
        </div>
      </div>
    </div>
    <!-- Pricing Ends Here -->

<br><br><br>
    <!-- Features Starts Here -->
    <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Collection development office</h4>
              <p>The Textile design office allows you to create or adjust your patterns, while taking care of the sourcing and development of your accessories, fabrics and embellishments</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Realization of collections</h4>
              <p>You will find competent operators at your disposal in order to propose the best possible realization for your prototypes, SMS (Sales samples) and washings</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Finalization of the production</h4>
              <p>After collection, Factory textile adapts your patterns according to your comments. A finalization of all your sourcing will be operated. A head of series will be sent for confirmation</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Production and export</h4>
              <p>Factory textile guarantees the best possible quality for your productions as a result of the control at the different stages of the production process before export</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Quality Hardwares</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="home/images/feature-01.png" alt="">
              </div>
              <h4>Network Solutions</h4>
              <p>Lorem ipsum dolor ame taxidermy sriracha cardigan salvia actually vice migas en pin sustainable carry scenester.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features Ends Here -->


    <!-- Testimonials Starts Here -->
    <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our strategy</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>Factory Textile uses a standardized and approved method to obtain a product of product of excellent quality</p>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                <h4>Vinny Smart</h4>
                <span>Digital Marketer</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
                <h4>Trevor Liam</h4>
                <span>Technology Chef</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Ends Here -->


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2> Plans</h2>
              </div>
             
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">123-456-789</a></li>
                <li>Email: <a href="#">Textile@company.com</a></li>
                <li>Support: <a href="#">Textilet@company.com</a></li>
                <li>Website: <a href="#">www.Textile.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2022 
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="home/js/custom.js"></script>
    <script src="home/js/owl.js"></script>
    <script src="home/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>