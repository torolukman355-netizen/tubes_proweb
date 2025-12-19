<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identitas = trim($_POST['identitas']);

    $sql = "SELECT id FROM users WHERE nim_nip = ? OR email = ? LIMIT 1";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $identitas, $identitas);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        header("Location: reset_proses.php?id=" . $user['id']);
        exit;
    } else {
        $error = "Akun tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - SATU</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="css/login.css">

    <style>
        /* CSS Tambahan agar seragam dengan gaya sebelumnya */
        .login-header h2 i {
            margin-left: 10px;
            color: #333;
        }
        .error-box {
            background: #ffebee;
            color: #c62828;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        button i {
            margin-left: 8px;
        }
    </style>
</head>
<body>

<div class="login-container">

    <div class="login-header">
        <h2>Reset Password <i class="fa-solid fa-lock"></i></h2>
        <p class="form-text">
            Masukkan NIM / NIP / Email yang terdaftar
        </p>
    </div>

    <?php if (isset($error)) : ?>
        <div class="error-box">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label>Identitas (NIM / NIP / Email)</label>
            <input type="text" name="identitas" placeholder="Contoh: 190800123" required>
        </div>

        <button type="submit">Lanjut <i class="fa-solid fa-chevron-right"></i></button>
    </form>

    <div class="signup-text" style="text-align:center; margin-top: 20px;">
        <a href="login.php" style="text-decoration: none; color: #666;">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Login
        </a>
    </div>

</div>

</body>
</html>
