
  <body class="login">
    
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registrarse</span></div>
        <form action="procesos/register.php">
          <div class="row">
            <div class="login-img">
              <img src="img/user.png" alt="">
            </div>
            <input type="email" name="email" placeholder="Email" required="true">
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/lock.png" alt="">
            </div>
            <input type="password" name="password" placeholder="Contraseña" required="true">
            
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/lock.png" alt="">
            </div>
            <input type="password" name="password-confirm" placeholder="Repite la contraseña" required ="true">
            
          </div>
          <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
          <div class="row button">
            <input type="submit" value="Registrarse">
          </div>
          <div class="signup-link">¿Ya tienes una cuenta? <a href="login.php">Ingresar</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
