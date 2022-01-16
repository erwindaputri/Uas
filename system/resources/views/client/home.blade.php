<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Vegetables</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
 @include('client.section.header')
  <!-- end header section --> 
  

  <!-- veg section -->
  <!-- slider section -->
  <section class="">
    <div id="customCarousel1">
      <div class="carousel-inner">
        <div class="">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    Tersedia sayur organik
                  </h1>
                  <p>
                    </p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-lg-7">
                <div class="img">
                  <img src="{{url('public')}}/images/3-2-vegetable-transparent.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                <h1>
                    Kami Menjual <br>
                    Buah Terbaik
                  </h1>
                  <p>
                    Selamat datang di Fruttato Shop. Menjual berbagai buah-buah segar dengan kualitas terbaik dari yang terbaik.</p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                    <a href="" class="btn-2">
                      Hubungi Kami
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-10 col-lg-15">
                <div class="img-box">
                  <img src="{{url('public')}}/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                <h1>
                    Kami Menjual <br>
                    Buah Terbaik
                  </h1>
                  <p>
                    Selamat datang di Fruttato Shop. Menjual berbagai buah-buah segar dengan kualitas terbaik dari yang terbaik.</p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                    <a href="" class="btn-2">
                      Hubungi Kami
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="{{url('public')}}/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        
      </ol>
    </div>
  </section>
  <!-- end slider section -->

 
  
  <!-- info section -->
  @include('client.section.info')
  <!-- end info section -->

  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>