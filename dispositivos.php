
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dispositivos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <!-- Navbar Start -->
<?php
    include 'navbar.php';

include 'clases\crud.php';
$id = $_SESSION['_id'];
$crud = new Crud();
$datos = $crud -> obtenerDocumento($id);
$tempInt = $datos['tempInt'];
$tempExt = $datos['tempExt'];
$tempDeseada = $datos['tempDeseada'];
$mono = $datos['mono'];
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Dispositivos</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Temperatures Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-success text-uppercase" style="letter-spacing: 5px;">Temperatura</h5>
                <h1 class="display-5 mb-0">Control de las temperaturas</h1>
            </div>
            <div class="row g-5">
            <div class="col-lg-6 col-md-6 wow zoomIn" >
                    <div class="card bg-light border-bottom  border-dark border-5 text-center rounded">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Temperatura interior</h3>
                            <p class="text-dark">Aqui se muestra la termperatura del interior actual</p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control text-center" placeholder="<?php echo $tempInt?>" disabled>
                                    <span class="input-group-text text-dark" id="basic-addon2">ºC</span>
                                </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-6 wow zoomIn">
                    <div class="card bg-light border-bottom border-dark border-5 rounded text-center">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Temperatura exterior</h3>
                            <p class="text-dark">Aqui se muestra la termperatura del exterior actual</p>
                                <div class="input-group mb-3 " style="border-background: #ffff">
                                    <input type="text" class="form-control text-center" placeholder="<?php echo $tempExt?>" disabled>
                                    
                                    <span class="input-group-text text-dark " id="basic-addon2">ºC</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                
            <div class="col-lg-3 col-md-6 wow zoomIn">
            </div>
            <div class="col-lg-6 col-md-6 wow zoomIn" >
                    <div class="card bg-light border-bottom  border-dark border-5 text-center rounded">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Temperatura deseada</h3>
                            <p class="text-dark">Ingresa la temperatura deseada</p>
                            <form action="api/apis.php/enviar-datos" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" hidden value="<?php echo $id ?>" name="id">
                                    <input type="number" class="form-control text-center" id="tempDeseada" name="tempDeseada" placeholder="<?php echo $tempDeseada?>" min="15" max="30">
                                    <span class="input-group-text text-dark" id="basic-addon2" >ºC</span>
                                </div>
                                <button type="submit" class="btn btn-danger">Guardar</button>
                            </form>
                                
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-2 col-md-6 wow zoomIn">
                </div>
            </div>
        </div>
    </div>
    <!-- Temperatures End -->
    

    <!-- Footer Start -->
    <?php
    include 'footer.php';
?>
    <!-- Footer End -->

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