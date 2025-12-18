<?php
session_start();
include "koneksi.php";

// 1. PERBAIKAN: Menutup kurung kurawal yang hilang
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
} // <--- Kurung penutup tadi hilang di sini

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Pastikan variabel koneksi ($koneksi atau $conn) sesuai dengan isi koneksi.php
    $sql = "SELECT * FROM users WHERE nim_nip = ? OR email = ? LIMIT 1";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            
            // 2. PERBAIKAN UTAMA: Ganti 'id' menjadi 'user_id' agar cocok dengan profil.php
            $_SESSION['user_id'] = $user['id']; 
            
            $_SESSION['nama']  = $user['nama_lengkap'];
            $_SESSION['role']  = $user['role'];

            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Akun tidak ditemukan!";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SATU</title>
    
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="login-container">
      
     <div class="login-header">
          <img src="image/logo.png" 
         alt="Logo Aplikasi" 
         class="logo-img">
         
    </div>
       
<?php if (isset($error)) : ?>
    <div class="error-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
        
        <span><?= $error ?></span>
    </div>
<?php endif; ?>

<form method="post" id="loginForm" class="login-form">

            
            <div class="form-group">
                <label for="username">Identitas (NIP/NIM/Email USU)</label>
                <input type="text" id="username" name="username" placeholder="Contoh: 251402105" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                    <span id="togglePassword" class="eye-icon" title="Lihat Password">👁️</span>
                </div>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ingat Saya</label>
            </div>

            <button type="submit">Login &rarr;</button>
        
        </form>

       <div class="signup-text" style="text-align: center; margin-top: 20px;">
            <p style="margin-bottom: 10px;">
                Lupa Password? <a href="reset.php">Reset di sini</a>
            </p>
            <p>
                Belum punya akun? <a href="daftar.php" style="font-weight: bold;">Daftar Sekarang</a>
            </p>
        </div>
    </div>

   <script src="js/login.js"></script>
</body>
</html>