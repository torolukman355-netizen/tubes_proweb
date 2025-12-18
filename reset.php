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
        $error = "❌ Akun tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password - SATU</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">

    <div class="login-header">
        <h2>Reset Password 🔒</h2>
        <p class="form-text">
            Masukkan NIM / NIP / Email yang terdaftar
        </p>
    </div>

    <?php if (isset($error)) : ?>
        <p style="color:red; text-align:center;">
            <?= $error ?>
        </p>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label>Identitas (NIM / Email)</label>
            <input type="text" name="identitas" required>
        </div>

        <button type="submit">Lanjut</button>
    </form>

    <div class="signup-text" style="text-align:center;">
        <a href="login.php">&larr; Kembali ke Login</a>
    </div>

</div>
</body>
</html>