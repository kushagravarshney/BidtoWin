<?php

 session_start();
?>
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
                                <li class="active">
                                    <a href="index.html" class="nav-link text-left">Home</a>
                                </li>
                                <li>
                                    <a href="buy.html" class="nav-link text-left">Buy</a>
                                </li>
                                <li>
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
                    <div class="ml-auto">   

                        <div class="social-wrap">
                            <p class="nav-link text-left text-white">

                             <i style='font-size:18px;color: white;' class="fas">&#xf2bd;</i>&nbsp;&nbsp;&nbsp;
                             <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;
                             <a href="index.html" style="color: #ffff00; font-weight: 500;">Log out</a>

                             </p>
                        </div>

                    </div>
            </div>

        </header>


        <!-- <div class="hero-slide owl-carousel site-blocks-cover"> -->
        <div class="intro-section" style="background-image: url('images/hero1111.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
                        <h1>Bid, Win, Repeat!</h1>
                        <p>Whatever suits your eye,just bid it and give it a try
                    </div>
                </div>
            </div>
        </div>


        <!-- </div> -->


        <div class="site-section">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-7 mb-5 text-center mx-auto">
                        <span class="caption">Auctions</span>
                        <h2 class="text-black">Current <strong>Auctions</strong></h2>
                    </div>
                </div>
                <div class="row auctions-entry">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$10000</strong>
                                <a href="kobe.html"><img src="images/kobe.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="kobe.html">Kobe Bryant's signed jersey</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item1"></p>
                                </div>
                                <strong><a href="kobe.html" class="btn btn-bid" id="sub">Submit a Bid</a></strong>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$150</strong>
                                <a href="perfume_item.html"><img src="images/gucci1.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="perfume_item.html">Gucci Guilty Perfume</a></h3>
                                <div class="d-flex mb-2">
                                    <strong><p id="item2"></p></strong>
                                </div>
                                <a href="perfume_item.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$7999</strong>
                                <a href="rmwatch.html"><img src="images/watch22.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="rmwatch.html">Richard Mille Limited Edition Watch</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item3"></p>
                                </div>
                                <a href="rmwatch.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$1,999</strong>
                                <a href="msdbat.html"><img src="images/msbat.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="msdbat.html">MS Dhoni 2011 WorldCup Bat</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item4"></p>
                                </div>
                                <a href="msdbat.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$777</strong>
                                <a href="greek.html"><img src="images/rsz_pottery1.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="greek.html">Ancient Greek Art Pottery</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item5"></p>
                                </div>
                                <a href="greek.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$6000</strong>
                                <a href="ring_item.html"><img src="images/ring1.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="ring_item.html">Sapphire Studded Ring</a></h3>
                                <div class="d-flex mb-2">
                                   <p id="item6"></p>
                                </div>
                                <a href="ring_item.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$2,500</strong>
                                <a href="macallan.html"><img src="images/Macallan2.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="macallan.html">Macallan 52 years aged Whiskey</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item7"></p>
                                </div>
                                <a href="macallan.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="item">
                            <div>
                                <strong class="price">$9000</strong>
                                <a href="coin.html"><img src="images/coin2.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="p-4">
                                <h3><a href="coin.html">Ancient Macedonian Coin</a></h3>
                                <div class="d-flex mb-2">
                                    <p id="item8"></p>
                                </div>
                                <a href="coin.html" class="btn btn-bid">Submit a Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mb-5">
                        <h2 class="text-black">How <strong>It Works</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="step">
                            <span class="wrap-icon icon-user"></span>
                            <h3>Register</h3>
                            <p>To start using our auction, you'll need to register. It's completely free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step">
                            <span class="wrap-icon icon-money"></span>
                            <h3>Buy or Bid</h3>
                            <p>You can instantly buy or place a bid on a desired product right after registration.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step">
                            <span class="wrap-icon icon-glass"></span>
                            <h3>Submit a bid</h3>
                            <p>Submitting a bid is fast and easy. The process takes approximately 5 minutes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step last">
                            <span class="wrap-icon icon-trophy"></span>
                            <h3>Win</h3>
                            <p>Easily win at our auction and enjoy owning the product you dream of.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="images/keshu.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 pl-lg-5">
                        <div class="mb-5">
                            <h2 class="text-black"><strong>Why Choose Us</strong></h2>
                        </div>
                        <div class="d-flex feature-icon mb-3">
                            <span class="wrap-icon icon-paper-plane mr-2"></span>
                            <div>
                                <h3>Fast Support</h3>
                                <p>You ask. We help.</p>
                            </div>
                        </div>

                        <div class="d-flex feature-icon mb-3">
                            <span class="wrap-icon icon-smile-o mr-2"></span>
                            <div>
                                <h3>Happy Customers</h3>
                                <p>Because a customer sharing their experiences with us is worth ten times what we say or write about ourselves.</p>
                            </div>
                        </div>

                        <div class="d-flex feature-icon mb-3">
                            <span class="wrap-icon icon-support mr-2"></span>
                            <div>
                                <h3>24/7 Support</h3>
                                <p>Because we don’t do part-time jobs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-bg style-1" style="background-image: url('images/hero1111.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h2 class=" text-center mb-5 text-white">Happy <strong>Clients</strong></h2>
                    </div>
                </div>


                <div class="owl-slide owl-carousel owl-testimonial">

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/grace.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Annabelle Wallis</h3>
                                <span>Actress</span>
                            </div>
                        </div>
                        <div>
                            <p>It just works perfect. Simple user interface. You can just "bid it or buy it" types. Maybe the best online tool I have ever encountered for EBay auctions. This shopping site places a lot of emphasis on excellent customer service. They have just increased online transparency for consumers and businesses both in auction websites. It avoids me having to be aware of bids that end at dawn. For me, it just helps make a better purchasing decision online!</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/simmba.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Simmba</h3>
                                <span>Police Officer</span>
                            </div>
                        </div>
                        <div>
                            <p>I was lucky to land on to this after losing many EBay auctions in the last few seconds (to other snipers). But this, I must say is Simple, versatile and very powerful. 
                            There is an option to specify that your bid is made just in the last 3-4-6 seconds. Just makes everything more interesting! In addition, for a small amount of registration, you can access sophisticated group control tools and security servers. I have used it for years now, and I can't say enough about this sniping service that costs next to nothing and has never failed me. Highly recommended.</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_33.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Siddharth Malhotra</h3>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div>
                            <p>I have had many great experiences with BIDTOWIN and I love bidding on their site. The interface is super simple and easy to use. I remember winning a glass item and they sent it with proper packaging so it wouldn’t get damaged in transit. This is a major problem in EBay auctions. They tend to send fragile items without the proper packaging but this was exceptional! Just made my experience much better!</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_5.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Bryan Cranston</h3>
                                <span>Teacher</span>
                            </div>
                        </div>
                        <div>
                            <p>I recently won a bidding on BIDTOWIN. However, about a week later, the consumer services called me to mention that the product I have won had run out of stock according to their supplier. Despite this, they tried to compensate with various substitutes of a similar value together with a free bid package to make up for their mistake. As the options provided were really good, I choose a different set and it arrived in two days which impressed me a lot! Appreciate your services greatly!</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/rachel.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Rachel Zane</h3>
                                <span>Attorney</span>
                            </div>
                        </div>
                        <div>
                            <p>Fantastic site with fantastic prices. Easy to use after you get used to it (I found it easier to use after my first time). Caveat emptor, ALWAYS READ the T&C's, especially delivery terms and prices of each individual auctioneer! Also read the 'Item description'.
                            I work on the principle that whatever I bid for, the final actual purchase price will be just under my bidding amount plus 50%, example; I bid $500, the actual overall price will usually be just under $800, EXCLUDING P&P. My system has always worked for me, I then know what the approximate final payment will be.
                            Hope this helps some people.
                            Now, get bidding and save money!</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Allison Holmes</h3>
                                <span>Designer</span>
                            </div>
                        </div>
                        <div>
                            <p> A friend of mine told me about BIDTOWIN and how he had won some tools and gift cards so I gave it a look see. I can see how some people might get carried away bidding on the auctions, but you have to stay focused and don't bid more than you can afford to. It's pretty neat. I love to bid on this site because it is fun. I won several items and the shipping is fast and reliable.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <h2 class="text-black mb-4">Create an account and start Buy, Bid or Sell Now!</h2>
                        <a href="#" class="btn btn-danger">Register</a>
                    </div>
                </div>
            </div>
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
            </div>
        </div>


    </div>
    <!-- .site-wrap -->
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78" /></svg></div>

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
    <script src="js/main.js"></script>
    <script src="js/time.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
 

   
</body>

    </html>