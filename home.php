  <!-- Carousel Start -->
  <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">Travel</h4>
              <h1 class="display-3 text-white mb-md-4">
                Perjalanan Anda, lebih mudah dengan Avatar!
              </h1>
              <a href="tiket.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">Travel</h4>
              <h1 class="display-3 text-white mb-md-4">
                Jelajahi Indonesia bersama Avatar
              </h1>
              <a href="tiket.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100"
            src="https://img.freepik.com/free-photo/woman-standing-rock-atuh-beach-nusa-penida-island-bali-indonesia_335224-344.jpg?t=st=1734764248~exp=1734767848~hmac=be5c6b9b2aaa70d2f3b4ac31cac2bdb2c8a55c11ee149bd6239d35d408499f0d&w=740"
            alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h4 class="text-white text-uppercase mb-md-3">Travel</h4>
              <h1 class="display-3 text-white mb-md-4">
                Rute lengkap, harga transparan, dan layanan terpercaya
              </h1>
              <a href="tiket.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px">
          <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
      </a>
      <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px">
          <span class="carousel-control-next-icon mb-n2"></span>
        </div>
      </a>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Booking Start -->
  <div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
      <div class="bg-light shadow" style="padding: 30px">
        <form action="tiket.php" method="get">
          <div class="row align-items-center" style="min-height: 60px">
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-4">
                  <div class="mb-3 mb-md-0">
                    <select class="custom-select px-4" style="height: 47px" id="mode1" name="mode">
                      <option selected hidden>Moda Transportasi</option>
                      <option value="pesawat">Pesawat</option>
                      <option value="kereta">Kereta</option>
                      <option value="kapal">Kapal</option>
                      <option value="bis">Bis</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3 mb-md-0">
                    <div class="date" id="date1" data-target-input="nearest">
                      <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Name" name="name"
                        id="name1" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3 mb-md-0">
                    <div class="date" id="date2" data-target-input="nearest">
                      <input type="number" class="form-control p-4 datetimepicker-input" placeholder="Phone Number"
                        id="contact1" name="contact" />
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-3">
                  <div class="mb-3 mb-md-0">
                    <select class="custom-select px-4" style="height: 47px">
                      <option selected>Duration</option>
                      <option value="1">Duration 1</option>
                      <option value="2">Duration 1</option>
                      <option value="3">Duration 1</option>
                    </select>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Booking End -->

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6" style="min-height: 500px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 pt-5 pb-lg-5">
          <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
              About Us
            </h6>
            <h1 class="mb-3">Kami Menyediakan Paket Terbaik</h1>
            <p>
              Kami hadir untuk mempermudah perjalanan Anda dengan menyediakan
              solusi travel antarmoda yang nyaman, cepat, dan terintegrasi.
              Menjadikan setiap perjalanan lebih efisian , menyenangkan, dan
              bebas dari kerumitan
            </p>
            <div class="row mb-4">
              <div class="col-6">
                <img class="img-fluid" src="img/bali1.jpg" alt="" />
              </div>
              <div class="col-6">
                <img class="img-fluid" src="img/jogja.jpg" alt="" />
              </div>
            </div>
            <a href="about.html" class="btn btn-primary mt-1">MORE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Feature Start -->
  <div class="container-fluid pb-5">
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex mb-4 mb-lg-0">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
              style="height: 100px; width: 100px">
              <i class="fa fa-2x fa-money-check-alt text-white"></i>
            </div>
            <div class="d-flex flex-column">
              <h5 class="">Harga Kompetitif</h5>
              <p class="m-0">
                Kami memberikan opsi perjalanan yang hemat biaya tanpa
                mengurangi kenyamanan
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex mb-4 mb-lg-0">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
              style="height: 100px; width: 100px">
              <i class="fa fa-2x fa-award text-white"></i>
            </div>
            <div class="d-flex flex-column">
              <h5 class="">Layanan Terbaik</h5>
              <p class="m-0">
                Dengan platform yang mudah digunakan dan tim yang responsif,
                kami memastikan perjalanan Anda selalu lancar
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex mb-4 mb-lg-0">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
              style="height: 100px; width: 100px">
              <i class="fa fa-2x fa-globe text-white"></i>
            </div>
            <div class="d-flex flex-column">
              <h5 class="">Cakupan Nasional</h5>
              <p class="m-0">
                Kami menyediakan konektivitas antarmoda yang mencakup berbagai
                kota besar dan daerah terpencil
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature End -->

  <!-- Destination Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
          Destination
        </h6>
        <h1>Explore Top Destination</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/bali.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Bali</h5>
              <span class="text-center">Pulau Dewata yang terkenal</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/jogja1.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Yogyakarta</h5>
              <span class="text-center">Pusat seni dan budaya Jawa</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/jkt.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Jakarta</h5>
              <span class="text-center">Pusat Perbelanjaan dan budaya modern</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/bandung.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Bandung</h5>
              <span class="text-center">Kota sejuk di dataran tinggi</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/lmbk.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Lombok</h5>
              <span class="text-center">Pulau Tropis dengan pantai menawan</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="img/sumut.jpg" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">Sumatera Utara</h5>
              <span class="text-center">Rumah bagi Danau Toba, dan budaya Batak yang kaya</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Destination End -->

  <!-- Service Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
          Services
        </h6>
        <h1>Travel Services</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-item bg-white text-center mb-2 py-5 px-4">
            <i class="fa fa-2x fa-route mx-auto mb-4"></i>
            <h5 class="mb-2">Schedule Finder</h5>
            <p class="m-0">
              Layanan Kami membantu Anda menemukan jadwal transportasi
              antarmoda yang sesuai dengan rencana Anda
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-item bg-white text-center mb-2 py-5 px-4">
            <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
            <h5 class="mb-2">Ticket Booking</h5>
            <p class="m-0">
              Pesan tiket transportasi antarmoda dengan mudah! Kami
              menyediakan layanan pemesanan tiket dalam satu platform
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-item bg-white text-center mb-2 py-5 px-4">
            <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
            <h5 class="mb-2">Multi-Route Planner</h5>
            <p class="m-0">
              Rencanakan perjalanan Anda dengan rute terbaik. Kami memberikan
              opsi perjalanan yang paling efisien
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Packages Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
          Packages
        </h6>
        <h1>Pefect Tour Packages</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="package-item bg-white mb-2">
            <img class="img-fluid" src="img/bali1.jpg" alt="" />
            <div class="p-4">
              <div class="d-flex justify-content-between mb-3">
                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Bali</small>
                <small class="m-0"><i class="fa fas fa-plane-departure text-primary mr-2"></i>Jakarta</small>
                <small class="m-0"><i class="fa fa-ticket-alt text-primary mr-2"></i>Lion
                  Air</small>
              </div>
              <a class="h5 text-decoration-none" href="">Nikmati keindahan pantai Bali</a>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex justify-content-between">
                  <h6 class="m-0">
                    <i class="fa fa-star text-primary mr-2"></i>4.5
                    <small>(250)</small>
                  </h6>
                  <h5 class="m-0">Rp. 575,923.40</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="package-item bg-white mb-2">
            <img class="img-fluid" src="img/bandung1.jpg" alt="" />
            <div class="p-4">
              <div class="d-flex justify-content-between mb-3">
                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Bandung</small>
                <small class="m-0"><i class="fa fa-train text-primary mr-2"></i>Malang</small>
                <small class="m-0"><i class="fas fa-ticket-alt text-primary mr-2"></i>KAI
                  Eksekutif</small>
              </div>
              <a class="h5 text-decoration-none" href="">Jelajahi suasana sejuknya kota Bandung</a>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex justify-content-between">
                  <h6 class="m-0">
                    <i class="fa fa-star text-primary mr-2"></i>4.5
                    <small>(250)</small>
                  </h6>
                  <h5 class="m-0">Rp. 246,901.93</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="package-item bg-white mb-2">
            <img class="img-fluid " src="img/surabaya.jpeg" alt="" />
            <div class="p-4">
              <div class="d-flex justify-content-between mb-3">
                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Surabaya</small>
                <small class="m-0"><i class="fa fa-bus text-primary mr-2"></i>Bandung</small>
                <small class="m-0"><i class="fas fa-ticket-alt text-primary mr-2"></i>PO. Agra
                  Mas</small>
              </div>
              <a class="h5 text-decoration-none" href="">Rasakan kehidupan kota terbesar di Jawa Timur</a>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex justify-content-between">
                  <h6 class="m-0">
                    <i class="fa fa-star text-primary mr-2"></i>4.5
                    <small>(250)</small>
                  </h6>
                  <h5 class="m-0">Rp. 177,375.54</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Packages End -->

  <!-- Registration Start -->
  <div class="container-fluid bg-registration py-5" style="margin: 90px 0">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="mb-4">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
              Mega Offer
            </h6>
            <h1 class="text-white">
              <span class="text-primary">30% OFF</span> For Solo Traveler
            </h1>
          </div>
          <p class="text-white">
            Jelajahi dunia dengan bebas dan temukan pengalaman baru yang tak
            terlupakan. Kami hadir untuk mewujudkan perjalanan solo Anda
            dengan mudah dan hemat
          </p>
          <ul class="list-inline text-white m-0">
            <li class="py-2">
              <i class="fa fa-check text-primary mr-3"></i>Eksplorasi
              destinasi terbaik tanpa batas
            </li>
            <li class="py-2">
              <i class="fa fa-check text-primary mr-3"></i>Kenyamanan dan
              Layanan Ekslusif
            </li>
            <li class="py-2">
              <i class="fa fa-check text-primary mr-3"></i>Kebebasan setiap
              langkah perjalanan Anda
            </li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="card border-0">
            <div class="card-header bg-primary text-center p-4">
              <h1 class="text-white m-0">Book Now</h1>
            </div>
            <div class="card-body rounded-bottom bg-white p-5">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                </div>
                <div class="form-group">
                  <input type="number" class="form-control p-4" placeholder="Your Phone Number" required="required" />
                </div>
                <div class="form-group">
                  <select class="custom-select px-4" style="height: 47px">
                    <option selected hidden>Moda Transportasi</option>
                    <option value="pesawat">Pesawat</option>
                    <option value="kereta">Kereta</option>
                    <option value="kapal">Kapal</option>
                    <option value="bis">Bis</option>
                  </select>
                </div>
                <div>
                  <button class="btn btn-primary btn-block py-3" type="submit">
                    Book Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration End -->

  <!-- Team Start -->
  <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
          Team
        </h6>
        <h1>Our Team</h1>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-2 col-md-3 col-sm-6 pb-2">
          <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
              <img class="img" style="height: 10rem; width: 10rem" src="img/bima.jpeg" alt="" />
              <div class="team-social">
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="text-center py-4">
              <h5 class="text-truncate">Bima</h5>
              <p class="m-0">Apk Javascript</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 pb-2">
          <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
              <img class="img" style="height: 10rem; width: 10rem" src="img/yuda.jpeg" alt="" />
              <div class="team-social">
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="text-center py-4">
              <h5 class="text-truncate">Yuda Albifarah</h5>
              <p class="m-0">Laporan</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 pb-2">
          <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
              <img class="img" style="height: 10rem; width: 10rem" src="img/ayu.jpeg" alt="" />
              <div class="team-social">
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="text-center py-4">
              <h5 class="text-truncate">Ayu</h5>
              <p class="m-0">Desain</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 pb-2">
          <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
              <img class="img" style="height: 10rem; width: 10rem" src="img/jordan.jpeg" alt="" />
              <div class="team-social">
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="text-center py-4">
              <h5 class="text-truncate">Jordan</h5>
              <p class="m-0">Frontend</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 pb-2">
          <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Me.jpg" alt="" />
              <div class="team-social">
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="text-center py-4">
              <h5 class="text-truncate">Shidqi</h5>
              <p class="m-0">Frontend</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Testimonial Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
          Testimonial
        </h6>
        <h1>What Say Our Clients</h1>
      </div>
      <div class="owl-carousel testimonial-carousel">
        <div class="text-center pb-4">
          <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text bg-white p-4 mt-n5">
            <p class="mt-5">
              Perjalanan solo saya menjadi lebih menyenangkan dengan layanan
              ini, semua kebutuhan perjalanan saya terpenuhi.
            </p>
            <h5 class="text-truncate">Andi Pratama</h5>
            <span>Digital Nomad</span>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text bg-white p-4 mt-n5">
            <p class="mt-5">
              Destinasi yang ditawarkan sangat menarik, dan pelayanan yang
              diberikan sungguh memuaskan.
            </p>
            <h5 class="text-truncate">Sarah Lestari</h5>
            <span>Street Photographer</span>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text bg-white p-4 mt-n5">
            <p class="mt-5">
              Layanan yang cepat dan harga yang terjangkau membuat saya bisa
              berpergian tanpa khawatir
            </p>
            <h5 class="text-truncate">Rizky Saputra</h5>
            <span>Freelancer</span>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text bg-white p-4 mt-n5">
            <p class="mt-5">
              Sangat puas dengan pengalaman saya! Timnya sangat membantu dan
              memastikan perjalanan saya berjalan lancar.
            </p>
            <h5 class="text-truncate">Alex Hobs</h5>
            <span>Manager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->