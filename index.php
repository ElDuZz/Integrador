
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
                    <img class="w-100" src="img/A3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Mejor sistema de ventilacion</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Te mantenemos fresco</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/A2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Te protegemos</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Evitamos posibles riesgos</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/A1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Te mantenemos a salvo</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Cuidamos tu ventilacion y tu vida</h1> 
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
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/casa_ventilacion.png"  style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Sobre nosotros</h5>
                        <h1 class="display-5 mb-0">Nosotros ofrecemos nuestro servicio y sistema</h1>
                    </div>
                    <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4> -->
                    <p class="mb-4 text-dark">Te ofrecemos monitorear las temperaturas para que tu como usuario tengas un ambiente en tu cuarto agradable basado en tu gusto</p>
                    <div class="row">
                        <div class="col wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-dark d-flex flex-column justify-content-center text-center border-bottom border-5 border-success rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Calidad garantizada</h4>
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
                <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Servicios</h5>
                <h1 class="display-5 mb-0">Nuestros excelentes servicios de control de temperaturas</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/aire-fresco.png" height="100px" alt="">
                            <h3 class="mb-3">Exterior</h3>
                            <p class="text-dark">Control en aplicacion de la temperatura exterior</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/wind.png" height="100px" alt="">
                            <h3 class="mb-3">Interior</h3>
                            <p class="text-dark">Control en aplicacion de la temperatura interior</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/air-conditioning.png" height="100px" alt="">
                            <h3 class="mb-3">Ventiladores</h3>
                            <p class="text-dark">Control total en el apagado y encendido de ventiladores para uso de refrigeraciòn</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/ventilacion (1).png" height="100px" alt="">
                            <h3 class="mb-3">Ventilaciòn</h3>
                            <p class="text-dark">Control en el uso de las ventilaciones que ayuden con corrientes de aire para la refrigeraciòn</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/calentador.png" height="100px" alt="">
                            <h3 class="mb-3">Calefacción</h3>
                            <p class="text-dark">Te cuidamos cuando utilizas tus calentadores </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-dark rounded">
                        <div class="position-relative p-5">
                            <img src="img/dioxido-de-carbono (1).png" height="100px" alt="">
                            <h3 class="mb-3">Dióxido de carbono</h3>
                            <p class="text-dark">Te protegemos del Dióxido de carbono en espacios con poca ventilación</p>
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
                <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Miembros del equipo</h5>
                <h1 class="display-5 mb-0">Nuestro equipo profesional</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/Duzz.jpeg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/jesusmanuel.velazquezirigoyen"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/elduzzggame/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Jesus Manuel Velazquez Irigoyen</h3>
                        <p class="text-white m-0">Desarrollador de Frontend</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/Noe.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/angelnoe.zavala"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/noe_hezpanol/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Angel Noe Hernandez Zavala</h3>
                        <p class="text-white m-0">Desarrollador de backend</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/alana.jpeg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/profile.php?id=100005045460586"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.instagram.com/alanporti/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-dark text-center rounded-bottom p-4">
                        <h3 class="text-white">Alan Rodrigo Portillo Tapia</h3>
                        <p class="text-white m-0">Desarrollador de base de datos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Blog Post</h5>
                <h1 class="display-5 mb-0">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h5 class="text-white fw-bold mb-0">01</h5>
                                <h6 class="text-light mb-0">January</h6>
                            </div>
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Admin</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Web Design</span>
                            </div>
                            <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h5 class="text-white fw-bold mb-0">01</h5>
                                <h6 class="text-light mb-0">January</h6>
                            </div>
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Admin</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Web Design</span>
                            </div>
                            <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
    

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