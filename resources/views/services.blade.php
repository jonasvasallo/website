<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Cyber Security Services</title>

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


  <x-navbar></x-navbar>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Cyber Security Services</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="main-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          @foreach ($services as $service)
          @if ($loop->index % 2 == 0)
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                  <!-- Updated to an anchor tag -->
                  <h4>{{ $service['service_name']}} </h4>
                  <p>
                  <ul>
                    <li>{{ $service['service_description'] }}</li>
                  </ul>
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image">
                  <img src="{{ $service['service_image'] }}" alt=""
                    style="height: 350px; object-fit: cover;">
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="{{ $service['service_image'] }}" alt=""
                    style="height: 350px; object-fit: cover;">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <!-- Updated to an anchor tag -->
                  <h4>{{ $service['service_name']}} </h4>
                  <p>
                  <ul>
                    <li>{{ $service['service_description'] }}</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
        <div class="col-lg-12">

        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>



  <!--<section class="simple-cta">
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

  <!--<section class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Investment in Details</h6>
            <h4>Upgrade your knowledge</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active gradient-border"><span>Crypto Investments</span></div>
                    <div class="gradient-border"><span>Cryptocurrency Market</span></div>
                    <div class="gradient-border"><span>Financial Planning</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="/assets/images/service-details-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Learn more about cryptocurrency investments</h4>
                          <p>Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                          <span>- Top Crypto prices and charts</span>
                          <span>- Is Cryptocurrency a good investment?</span>
                          <span class="last-span">- Crypto Market Insiders and News</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="/assets/images/service-details-02.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Read more on Cryptocurrency Market</h4>
                          <p>Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                          <span>- Digital Currency Exchange</span>
                          <span>- Trading Cryptocurrencies Online</span>
                          <span class="last-span">- Different Categories of Digital Currencies</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="/assets/images/service-details-03.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>How to carefully plan on your online financials</h4>
                          <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus. Nulla facilisi. Mauris vitae lacinia magna. Nam euismod sapien sit amet elementum blandit. Nulla non placerat neque.</p>
                          <span>- Financial Planning and Investments</span>
                          <span>- Business Networking</span>
                          <span class="last-span">- Managing Digital Assets</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
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
-->

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