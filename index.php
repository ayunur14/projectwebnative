<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sign in || Sign up form</title>
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="style_login2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  </head>
  <body>
    <div class="container" id="main">
      <!-- Sign Up Form -->
      <div class="sign-up">
        <form action="" method="POST">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="https://www.facebook.com" target="_blank" class="social"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="https://mail.google.com" target="_blank" class="social"
              ><i class="fab fa-google-plus-g"></i
            ></a>
            <a href="https://www.linkedin.com" target="_blank" class="social"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
          <p>or use your email for registration</p>
          <input type="text" name="nama" placeholder="Name" required />
          <input type="email" name="email" placeholder="Email" required />
          <input
            type="password"
            name="password"
            placeholder="Password"
            required />
          <input
            type="password"
            name="repassword"
            placeholder="Confirm Password"
            required />
          <button type="submit" name="register">Sign Up</button>
        </form>
      </div>
      <!-- Sign In Form -->
      <div class="sign-in">
        <form action="" method="POST">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="https://www.facebook.com" target="_blank" class="social"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="https://mail.google.com" target="_blank" class="social"
              ><i class="fab fa-google-plus-g"></i
            ></a>
            <a href="https://linkedin.com" target="_blank" class="social"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
          <p>Pakai Account Anda</p>
          <input type="email" name="email" placeholder="Email" required />
          <input
            type="password"
            name="password"
            placeholder="Password"
            required />
          <a href="#" class="forgot">Forgot your password?</a>
          <button type="submit" name="login">Sign In</button>
        </form>
      </div>
      <!-- Overlay Content -->
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us, please log in with your personal info
            </p>
            <button id="signIn">Sign In</button>
          </div>
          <div class="overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your details and start your journey with us</p>
            <button id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <!-- JS code for toggling sign-in and sign-up forms -->
    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const main = document.getElementById("main");

      signUpButton.addEventListener("click", () => {
        main.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        main.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>

<?php
session_start();
if(isset($_SESSION['email'])){
header("location:dashboard.php");
}

require "koneksi.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $passwordreg = $_POST['password'];
    $repasswordreg = $_POST['repassword'];

    // Cek apakah password dan konfirmasi password sama
    if ($passwordreg == $repasswordreg) {
        $hashed_password = md5($passwordreg); // Hash password sebelum disimpan
        $query = "INSERT INTO account (id_account, email, password, akses) VALUES (NULL, '$email', '$hashed_password', '2')";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Pendaftaran Berhasil!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Pendaftaran gagal..!');
                    window.location.href = 'index.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Password tidak sama...!');
                window.location.href = 'index.php';
              </script>";
    }
}

if (isset($_POST['login'])) {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Enkripsi password

    // Query untuk memeriksa kredensial
    $query2 = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($query2) != 0) {
        // Mendapatkan data pengguna
        $row = mysqli_fetch_assoc($query2);

        // Memulai sesi
        session_start();
        $_SESSION['id'] = $row['id_account'];
        $_SESSION['email'] = $row['email'];

        // Redirect berdasarkan akses pengguna
        if ($row['akses'] == 1) {
            echo "<script>
                    alert('Login berhasil!');
                    window.location.href = 'dashboard.php';
                  </script>";
        } else if ($row['akses'] == 2) {
            echo "<script>
                    alert('Login berhasil ke User!');
                    window.location.href = 'user.php';
                  </script>";
        }
    } else {
        // Login gagal
        echo "<script>
                alert('Login Gagal!');
                window.location.href = 'index.php';
              </script>";
    }
}
?>


