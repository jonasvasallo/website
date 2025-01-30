<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Mexant - Financial HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/about">Why DataSec</a></li>
                            <li class="scroll-to-section"><a href="/about">Our Approach</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Products </a>
                                <ul class="sub-menu">
                                    @foreach ($services as $service)
                                    <li><a href="/services">{{ $service['service_name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <><a></a>
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Resources</a>
                                    <ul class="sub-menu">
                                        <!-- Resource Center Dropdown -->
                                        <li class="has-sub">
                                            <a href="javascript:void(0)">Resource Center</a>
                                            <ul class="sub-menu">
                                                <li><a href="resource-page.html#research">Research</a></li>
                                                <li><a href="resource-page.html#webinars">Webinars</a></li>
                                                <li><a href="resource-page.html#case-studies">Case Studies</a></li>
                                            </ul>
                                        </li>
                                        <!-- Media Center -->
                                        <li><a href="media-center.html">Media Center</a></li>
                                        <!-- Threat Hunting / Consulting -->
                                        <li><a href="threat-hunting.html">Threat Hunting / Consulting</a></li>
                                        <!-- Endpoint Protection -->
                                        <li><a href="endpoint-protection.html">Endpoint Protection</a></li>
                                    </ul>
                                </li>

                                <li class="scroll-to-section"><a href="/">Testimonials</a></li>
                                <li><a href="/contact-us">Book a Meeting</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** 
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(/assets/images/slide-01.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Protect</em> Your Data<br>&amp; upgrade <em>all aspects</em></h2>
                  <div class="div-dec"></div>
                  <p>Mexant HTML5 Template is provided for free of charge. This layout is based on Boostrap 5 CSS framework. Anyone can download and edit for any professional website. Thank you for visiting TemplateMo website.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(/assets/images/slide-02.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Digital</em> Currency for you <br>&amp; Best <em>Crypto</em> Tips</h2>
                  <div class="div-dec"></div>
                  <p>You will see a bunch of free CSS templates when you search on Google. TemplateMo website is probably the best one because it is 100% free. It does not ask you anything in return. You have a total freedom to use any template for any purpose.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(/assets/images/slide-03.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Best One in Town<br>&amp; Crypto <em>Services</em></h2>
                  <div class="div-dec"></div>
                  <p>When you browse through different tags on TemplateMo website, you can see a variety of CSS templates which are responsive website designs for different individual needs. Please tell your friends about our website. Thank you.</p>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  -->
    <!-- ***** Main Banner Area End ***** -->

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-archive"></i>
                        <h4>CSS Templates</h4>
                        <p>TemplateMo website is the best for you to explore and download free website templates.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-cloud"></i>
                        <h4>HTML5 Web Pages</h4>
                        <p>Templates are based on Bootstrap 5 CSS framework. You can easily adapt or modify based on
                            your needs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-charging-station"></i>
                        <h4>Responsive Designs</h4>
                        <p>All of our CSS templates are 100% free to use for commercial or business websites.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-suitcase"></i>
                        <h4>Mobile and Tablet ready!</h4>
                        <p>Our HTML CSS templates are well-tested on mobile, tablet, and desktop compatibility.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-archway"></i>
                        <h4>Fast Customer Support</h4>
                        <p>Do not be hesitated to contact us if you have any question or concern about our templates.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fas fa-puzzle-piece"></i>
                        <h4>Fully Customizable</h4>
                        <p>If you have any idea or suggestion about new templates, feel free to let us know.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Business <em>Solutions</em> and <strong>Crypto</strong> Investments</h4>
                </div>
                <div class="col-lg-7">
                    <div class="buttons">
                        <div class="green-button">
                            <a href="#">Discover More</a>
                        </div>
                        <div class="orange-button">
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="calculator">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left-image">
                        <img src="/assets/images/calculator-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>Your Freedom</h6>
                        <h4>Get a Financial Plan</h4>
                    </div>
                    <form id="calculate" action="" method="get">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="name">Your Name</label>
                                    <input type="name" name="name" id="name" placeholder="" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="email">Your Email</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder=""
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="" autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="chooseOption" class="form-label">Your Reason</label>
                                    <select name="Category" class="form-select" aria-label="Default select example"
                                        id="chooseOption" onchange="this.form.click()">
                                        <option selected>Choose an Option</option>
                                        <option type="checkbox" name="option1" value="Online Banking">Online Banking
                                        </option>
                                        <option value="Financial Control">Financial Control</option>
                                        <option value="Yearly Profit">Yearly Profit</option>
                                        <option value="Crypto Investment">Crypto Investment</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h4>What They Say</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem.
                                Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus,
                                in euismod ligula. Aliquam vel scelerisque elit.”</p>
                            <h4>David Eigenberg</h4>
                            <span>CEO of Mexant</span>
                            <div class="right-image">
                                <img src="/assets/images/testimonials-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In
                                blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus
                                condimentum tempus.”</p>
                            <h4>Andrew Garfield</h4>
                            <span>CTO of Mexant</span>
                            <div class="right-image">
                                <img src="/assets/images/testimonials-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac
                                gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
                            <h4>George Lopez</h4>
                            <span>Crypto Manager</span>
                            <div class="right-image">
                                <img src="/assets/images/testimonials-01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="/assets/images/client-01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 Mexant Co., Ltd. All Rights Reserved.

                        <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com"
                            target="_blank">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>

    <script src="/assets/js/tabs.js"></script>
    <script src="/assets/js/swiper.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function(speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
</body>

</html>