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
    <title>Password Baru</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">

    <div class="login-header">
        <h2>Password Baru 🔐</h2>
    </div>

    <?php if (isset($error)) : ?>
        <p style="color:red; text-align:center;">
            <?= $error ?>
        </p>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label>Password Baru</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Simpan Password</button>
    </form>

</div>
 <script src="js/reset.js"></script>
</body>
</html>