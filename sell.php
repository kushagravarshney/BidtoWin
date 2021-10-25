<!DOCTYPE html>
<html lang="en">

<head>
  <title>BIDTOWIN - Online Auction</title>
  <link rel="shortcut icon" type="image/jpg" href="images/icon.ico"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar py-4 site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo_footer.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="buy.html" class="nav-link text-left">Buy</a>
                </li>
                <li class="active">
                  <a href="sell.php" class="nav-link text-left">Sell</a>
                </li>
                
                <li>
                  <a href="services.html" class="nav-link text-left">Services</a>
               
                </li>
                <li>
                  <a href="about.html" class="nav-link text-left">About</a>
                </li>
                
                <li>
                  <a href="contact.html" class="nav-link text-left">Contact</a>
                </li>
              </ul>                                                                
            </nav>

          </div>
        

          </div>
        </div>

      </header>


      <!-- <div class="hero-slide owl-carousel site-blocks-cover"> -->
        <div class="intro-section" style="background-image: url('images/hero1111.jpg');">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                <h1>Sell and Build your own Auction</h1>
                
              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
        <form action="product.php" method="POST">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 text-black"><strong>Enter Product Details:</strong></h2>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Product name</label>
                  <input type="text" name="pname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                  <label>Base price</label>
                  <input type="number" name="bprice" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Auction Start Date</label>
                  <input type="datetime-local" name="sdatetime" class="form-control form-control-lg" style="font-size: 15px;">
                </div>
                <div class="col-md-6 form-group">
                  <label for="tel">Auction End Date</label>
                  <input type="datetime-local" name="edatetime" class="form-control form-control-lg" style="font-size: 15px;">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Product Description</label>
                  <textarea name="pdesc" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <input type="submit" value="Create Product" class="btn btn-danger btn-lg px-5">
                </div>
              </div>
            </div>
            <div class="col-lg-5 ml-auto">
              <div class="mb-3 bg-white">
                <br><br><br><p>Product Images</p><br>
                <div>
                  <input type='file' onchange="readURL(this);" multiple /><br><br>
                  <img id="blah" src="images/placeholder.png" alt="your image" height="350px" width="450px" />
                </div>
              </div>
            </div>
          </div> 
        </div>
      </form>
      </div>

         
          <div class="footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <p class="mb-4"><img src="images/logo_footer.png" alt="Image" class="img-fluid"></p>
                  <p>We believe Life is full of Auction. <br> So Try it, Bid it and Buy it.</p>  
                  <p><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-3">
                  <h3 class="footer-heading"><span>Solutions</span></h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Submit a bid</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h3 class="footer-heading"><span>Services</span></h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Submit a bid</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h3 class="footer-heading"><span>Contact</span></h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Support Community</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Share Your Story</a></li>
                    <li><a href="#">Our Supporters</a></li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="copyright">
                    <p>
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- .site-wrap -->


        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.mb.YTPlayer.min.js"></script>

        <script type="text/javascript">
          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
          }
          function createpro(){
            alert("Thank YOU for creating a product!!!");
          }
        </script>


        <script src="js/main.js"></script>

      </body>

      </html>