<?php
include "koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: reset.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password=? WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "si", $password, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Password berhasil diubah!');
                window.location='login.php';
              </script>";
        exit;
    } else {
        $error = "Gagal reset password!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Baru - SATU</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">

    <style>
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }
        .password-container input {
            width: 100%;
            padding-right: 40px;
        }
        .eye-icon {
            position: absolute;
            right: 15px;
            cursor: pointer;
            color: #666;
        }
        .login-header h2 i {
            color: #333;
            margin-left: 8px;
        }
        .error-message {
            color: #c62828;
            background: #ffebee;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-container">

    <div class="login-header">
        <h2>Password Baru <i class="fa-solid fa-key"></i></h2>
        <p>Silakan masukkan password baru Anda.</p>
    </div>

    <?php if (isset($error)) : ?>
        <div class="error-message">
            <i class="fa-solid fa-circle-exclamation"></i> <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label>Password Baru</label>
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="••••••••" required>
                <span id="togglePassword" class="eye-icon">
                    <i class="fa-solid fa-eye" id="eyeIcon"></i>
                </span>
            </div>
        </div>

        <button type="submit">Simpan Password <i class="fa-solid fa-check"></i></button>
    </form>

    <div class="signup-text" style="text-align:center; margin-top: 20px;">
        <a href="login.php" style="text-decoration: none; color: #666;">Batal dan Kembali</a>
    </div>

</div>

<script>
    // JavaScript digabung di sini
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');

        if (togglePassword) {
            togglePassword.addEventListener('click', function () {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                
                // Ganti ikon mata
                eyeIcon.classList.toggle('fa-eye');
                eyeIcon.classList.toggle('fa-eye-slash');
            });
        }
    });
</script>

</body>
</html>
