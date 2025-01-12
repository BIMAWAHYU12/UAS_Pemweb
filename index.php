<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>AVATAR.COM | Travel Booking Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/Ava.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center">
            <p><i class="fa fa-envelope mr-2"></i>avatravel@gmail.com</p>
            <p class="text-body px-3">|</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a class="text-primary px-3" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-primary px-3" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-primary px-3" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-primary px-3" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-primary pl-3" href="">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
      <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
          <h1 class="m-0 text-primary d-inline-block">
            <span class="text-dark">AVAT</span>AR
          </h1>
          <small class="d-inline-block font-weight-bold">.com</small>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="index.php?hal=home" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'home')
              echo 'active'; ?>">Home</a>
            <a href="index.php?hal=about" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'about') echo 'active'; ?>">About Us</a>
            <a href="index.php?hal=team" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'team')
              echo 'active'; ?>">Our Team</a>
            <a href="index.php?hal=package" class="nav-item nav-link <?php if (isset($_GET['hal']) && $_GET['hal'] == 'package')
              echo 'active'; ?>">Tour Packages</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Halaman Start -->
  <?php
  $req = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : '';

  if (!empty($req)) {
    include_once $req . '.php';
  } else {
    include_once 'home.php';
  }
  ?>
  <!-- Halaman End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="" class="navbar-brand">
          <h1 class="text-primary"><span class="text-white">AVAT</span>AR</h1>
        </a>
        <p>
          Avatar adalah platform perjalanan terbaik untuk memenuhi kebutuhan
          perjalanan Anda. Kami menawarkan layanan yang mudah, cepat, dan
          terpercaya.
        </p>
        <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px">
          Follow Us
        </h6>
        <div class="d-flex justify-content-start">
          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
          Our Services
        </h5>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
          <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
          Usefull Links
        </h5>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
          <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
          <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
          Contact Us
        </h5>
        <p>
          <i class="fa fa-map-marker-alt mr-2"></i>Lenteng Agung, Jakarta, INA
        </p>
        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
        <p><i class="fa fa-envelope mr-2"></i>avatravel@example.com</p>
        <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px">
          Newsletter
        </h6>
        <div class="w-100">
          <div class="input-group">
            <input type="text" class="form-control border-light" style="padding: 25px" placeholder="Your Email" />
            <div class="input-group-append">
              <button class="btn btn-primary px-3">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
    style="border-color: rgba(256, 256, 256, 0.1) !important">
    <div class="row">
      <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
        <p class="m-0 text-white-50">
          Copyright &copy; <a href="#">AVATAR.com</a>. All Rights Reserved.
        </p>
      </div>
      <div class="col-lg-6 text-center text-md-right">
        <p class="m-0 text-white-50">
          Designed by <a href="">Avatar Team</a>
        </p>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

  <!-- Logic Javascript -->
  <script src="js/script.js"></script>
</body>

</html>