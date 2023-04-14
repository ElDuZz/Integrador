<?php session_start(); ?>
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


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="index.php" class="navbar-brand">
        
       <img src="img/Noto.png" height="100xp" alt="">
    </a>
    <a href="index.php" class="navbar-brand">
        
        <h1 class="display-5 m-0 text-success">No<span class="text-warning">to</span></h1>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="Ingles/index.php" class="nav-item nav-link "><img src="img/estados-unidos-de-america.png" alt="" style="width:30px; height:30px;" ></a>
            <a href="index.php" class="nav-item nav-link">Inicio</a>
            <a href="about.php" class="nav-item nav-link">Nosotros</a>
            <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
            
            
            
            <?php if(!isset($_SESSION['username']) && !isset($_SESSION['_id'])){?>
                <a href="login.php" class="nav-item nav-link me-3">Iniciar Sesion</a>

             <?php }else{ ?>
                
                <a href="dispositivos.php" class="nav-item nav-link ">Dispositivos</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/usuario.png" alt="" style="width:30px; height:30px;" >
                    <?php echo $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="procesos/logout.php">Salir</a></li>
                </ul>
                </li>
                <?php } ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->