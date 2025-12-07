<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../../includes/header.php';?>
<body>
    <div id="vanta-bg">
        <div class="center-container">
            <div class="card">

                <h2 class="card-title">Create Account</h2>

                <form action="../../process/register_process.php" method="POST">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                    <button class="btn-primary" type="submit">Register</button>

                    <div class="text-link">
                        Sudah punya akun? <a href="./login.php">Masuk</a>
                    </div>
                </form>
                <?php include __DIR__ . '/../../includes/header.php';?>
            </div>
        </div>
    </div>
    <script src="../../assets/js/vanta-init.js"></script>
</body>
</html>
