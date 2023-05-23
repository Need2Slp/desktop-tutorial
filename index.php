<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/icon/favicon.png">
    <title>kedai poligon</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="splide/css/splide.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <a class="navbar-brand mx-auto" href="index.php">kedai poligon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link" href="menu-ramen.php">Menu</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="promo.php">Promo</a>
            </li>
<!--            <li class="nav-item me-3">-->
<!--              <a class="nav-link" href="shop.php">Shop</a>-->
<!--            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-12">
          <div class="header mt-5">
            <div class="header-text">
              <h1 class="">Enjoy hot and freshly made breakfast at kedai poligon</h1>
              <p class="w-75">Nikmati Jajanan & Sarapan Lezat di Kedai Poligon, Surga Kuliner Pilihan di Palembang!</p>
            </div>

            <div class="header-link">
              <a class="want-ramen" href="menu-ramen.php">explore menu!<img class="ms-3" src="assets/icon/left-rounded-arrow.svg" alt=""></a>
            </div>
          </div>
        </div>

        <div class="col-1 d-none d-xxl-block"></div>

        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 d-none d-sm-none d-md-block d-lg-block">
          <div class="mt-4">
            <!-- <img class="z-index-min position-absolute" src="assets/icon/blob-right.svg" alt=""> -->
            <img class="header-img" src="assets/img/poligon.png" alt="">
          </div>
        </div>
      </div>

      <div class="row align-items-center mt-5">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/clock-rounded.svg" alt=""></span>
            <p class="title">06:00 am - 7.00 pm</p>
            <p class="sub-title mb-0">Everyday</p>
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/location-rounded.svg" alt=""></span>
            <p class="title">Jl. Raya Bukit Sejahtera, Palembang</p>
            <a class="sub-title" href="https://www.google.com/maps/@-3.0072563252488203,104.72004950318862,21.3z" target="_blank" style="text-decoration: none;">Get directions</a>
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/phone-rounded.svg" alt=""></span>
            <p class="title">+62 812 719 599 44</p>
            <a class="sub-title mb-0" href="https://api.whatsapp.com/send?phone=6281271959944">Contact us</a>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="menu text-center">
          <p class="sub-title mb-2">Menu</p>
          <p class="title">Explore Our Best Menu</p>
        </div>

        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track pt-3 p-5">
        		<ul class="splide__list">
        			<li class="splide__slide px-4">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/nasduk.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Nasi Uduk</h5>
                    <p class="menu-desc">Nasi Uduk adalah...
                    </p>
                  </div>
                </div>
              </li>

        			<li class="splide__slide px-4">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/bubur.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Bubur Palembang</h5>
                    <p class="menu-desc">Bubur Palembang adalah...
                    </p>
                  </div>
                </div>
              </li>

        			<li class="splide__slide px-4">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/escoklat.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Es Coklat Nyandu</h5>
                    <p class="menu-desc">Es Coklat Nyandu adalah...
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/putuayu.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Putu Ayu</h5>
                    <p class="menu-desc">Putu Ayu adalah...
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4" width="auto">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/bakwan.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Bakwan</h5>
                    <p class="menu-desc">Bakwan adalah...
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4">
                <div class="card py-5 h-100">
                  <img class="menu-img w-100" src="assets/img/risol.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Risol</h5>
                    <p class="menu-desc">Risol adalah...
                    </p>
                  </div>
                </div>
              </li>
        		</ul>
          </div>
        </div>
      </div>
    </div>

<section class="footer">
  <div class="container">
    <footer class="row row-cols-4 py-5 mt-4">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <a href="index.html" class="navbar-brand d-flex align-items-center mb-3 d-inline-flex">kedai poligon</a>
        <p class="desc text-justify">Nikmati Jajanan & Sarapan Lezat di Kedai Poligon, Surga Kuliner Pilihan di Palembang!</p>
      </div>

      <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <h5 class="nav-col mb-3">Social Media</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.instagram.com/es_coklat_nyandu_poligon/" class="nav-link p-0 d-inline-flex">Instagram</a></li>
          <li class="nav-item mb-2"><a href="tel:+6281271959944" class="nav-link p-0 d-inline-flex">WhatsApp</a></li>
        </ul>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <h5 class="nav-col mb-3">Our Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 d-inline-flex">Home</a></li>
          <li class="nav-item mb-2"><a href="menu.php" class="nav-link p-0 d-inline-flex">Menu</a></li>
          <li class="nav-item mb-2"><a href="promo.php" class="nav-link p-0 d-inline-flex">Promo</a></li>
          <li class="nav-item mb-2"><a href="login.php" class="nav-link p-0 d-inline-flex">Login</a></li>
        </ul>
      </div>
    </footer>
  </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="splide/js/splide.js"></script>
    <script type="text/javascript">
      var splide = new Splide( '.splide', {
      perPage: 3,
      height: '100%',
      padding: '3rem',
      rewind : true,
      breakpoints: {
  			766: {
  				perPage: 1,
          autoplay: true,
        },
        1000: {
  				perPage: 2,
        },
      }
      } );

      splide.mount();
    </script>

    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
