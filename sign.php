<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTO | Sign in </title>
  </head>
  <body class="login">
    
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registrarse</span></div>
        <form action="#">
          <div class="row">
            <div class="login-img">
              <img src="img/user.png" alt="">
            </div>
            <input type="text" placeholder="Email o Usuario" required>
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/lock.png" alt="">
            </div>
            <input type="password" placeholder="Contraseña" required>
            
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/lock.png" alt="">
            </div>
            <input type="repeat-password" placeholder="Repite la contraseña" required>
            
          </div>
          <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
          <div class="row button">
            <input type="submit" value="Registrarse">
          </div>
          <div class="signup-link">¿Ya tienes una cuenta? <a href="login.html">Ingresar</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
