<?php
session_start(); 
?>

<html lang="en">
<?php include __DIR__ . '/../../includes/header.php';?>
  <body>
    <div id="vanta-bg">
      <div class="center-container">
          <div class="card card-login">

              <h2 class="card-title">Login</h2>

              <form action="../../process/login_process.php" method="POST">

                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" required>
                  </div>

                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" required>
                  </div>

                  <button class="btn-primary">Masuk</button>

                  <div class="text-link">
                      Belum punya akun? <a href="./register.php">Daftar sekarang</a>
                  </div>
              </form>
             <?php include __DIR__ . '/../../includes/footer.php';?>
          </div>
      </div>
    </div>
    <script src="../../assets/js/vanta-init.js"></script>
  </body>

</html>
