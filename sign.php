<title>Registarse</title>
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>


  <body class="login">
    


    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registrarse</span></div>
        <form action="procesos/register.php" method="post">
        <div class="row">
            <div class="login-img">
              <img src="img/cuenta.png" alt="">
            </div>  
            <input type="text" name="username" id="username" placeholder="Usuario" required="true">
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/email.png" alt="">
            </div>
            <input type="email" name="mail" id="mail" placeholder="Email" required="true">
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/bloquear.png" alt="">
            </div>
            <input type="password" name="password" id="password" placeholder="Contraseña" required="true">
            
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/repeating.png" alt="">
            </div>
            <input type="password" name="password-confirm" id="password-confirm" placeholder="Repite la contraseña" required ="true">
            
          </div>
          <?php if (isset($_GET['error'])) { ?>
                <div class="alert  text-center text-danger" style="border-radius: 30px;" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php }?>
          <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
          <div class="row button" style="margin-top: 10px;">
            <input type="submit" value="Registrarse">
          </div>
          <div class="signup-link text-dark">¿Ya tienes una cuenta? <a href="login.php">Ingresar</a></div>
        </form>
      </div>
    </div>

    
  </body>
</html>
