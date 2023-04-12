<title>Index</title>
<body>
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" id="inicio">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../img/A3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Better ventilation system</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">We keep you cool</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../img/A2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">We protect you</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">We avoid possible risks</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../img/A1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">We keep you safe</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">We take care of your ventilation and your life</h1> 
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="../img/casa_ventilacion.png"  style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">About us</h5>
                        <h1 class="display-5 mb-0">We offer our service and system</h1>
                    </div>
                    <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4> -->
                    <p class="mb-4 text-dark">What we seek to offer is a ventilation service that can help you in the different seasons of the year.</p>
                    <div class="row">
                        <div class="col wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-dark d-flex flex-column justify-content-center text-center border-bottom border-5 border-success rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Guaranteed quality</h4>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <i class="fa fa-award fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Award Winning</h4>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Services</h5>
                <h1 class="display-5 mb-0">Our excellent temperature control services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/aire-fresco.png" height="100px" alt="">
                            <h3 class="mb-3">Abroad</h3>
                            <p class="text-dark">Control in application of the outside temperature</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/wind.png" height="100px" alt="">
                            <h3 class="mb-3">Inside</h3>
                            <p class="text-dark">In-app control of indoor temperature</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/air-conditioning.png" height="100px" alt="">
                            <h3 class="mb-3">Fans</h3>
                            <p class="text-dark">Total control in turning off and on fans for cooling use</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/ventilacion (1).png" height="100px" alt="">
                            <h3 class="mb-3">Ventilation</h3>
                            <p class="text-dark">Control in the use of ventilation that helps with air currents for cooling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/calentador.png" height="100px" alt="">
                            <h3 class="mb-3">Heating</h3>
                            <p class="text-dark">We take care of you when you use your heaters</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="../img/dioxido-de-carbono (1).png" height="100px" alt="">
                            <h3 class="mb-3">Carbon dioxide</h3>
                            <p class="text-dark">We protect you from carbon dioxide in spaces with little ventilation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Team members</h5>
                <h1 class="display-5 mb-0">Our professional team</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="../img/Duzz.jpeg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/jesusmanuel.velazquezirigoyen"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/elduzzggame/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Jesus Manuel Velazquez Irigoyen</h3>
                        <p class="text-white m-0">Front End Developer</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="../img/Noe.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/angelnoe.zavala"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/noe_hezpanol/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Angel Noe Hernandez Zavala</h3>
                        <p class="text-white m-0">Backend developer</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="../img/alana.jpeg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/profile.php?id=100005045460586"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/alanporti/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Alan Rodrigo Portillo Tapia</h3>
                        <p class="text-white m-0">Database developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#inicio" class="btn btn-lg btn-dark btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>