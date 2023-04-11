<title>Iniciar Sesion</title>
  
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->
  <body class="login">
    <div class="login">

      <div class="container">
        <div class="wrapper">
          <div class="title"><span>Ingresar</span></div>
          <form action="procesos/login.php" method="post">
            <div class="row">
              <div class="login-img">
                <img src="img/cuenta.png" alt="">
              </div>
              <input type="email" name="mail" id="mail" placeholder="Email" required="true" >
            </div>
            <div class="row">
              <div class="login-img">
                <img src="img/bloquear.png" alt="">
              </div>
              <input type="password" name="password" id="password" placeholder="Contraseña" required="true">
            </div>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert  text-center text-danger" style="border-radius: 30px;" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php }?>
            <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
            <div class="row button" style="margin-top: 10px;">
              <input type="submit" value="Ingresar">
            </div>
            <div class="signup-link text-dark">¿No eres usuario? <a href="sign.php">Registrate</a></div>
          </form>
        </div>

      </div>
    </div>
    
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
