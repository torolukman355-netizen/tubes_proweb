<?php
session_start();
include "koneksi.php";


if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['id_user'];
$pesan = "";


$query = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$id_user'");
$data = mysqli_fetch_assoc($query);


if (isset($_POST['simpan'])) {
    $nama     = htmlspecialchars($_POST['nama']);
    $email    = htmlspecialchars($_POST['email']);
    $tempat   = htmlspecialchars($_POST['tempat']);
    $tanggal  = $_POST['tanggal'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $update = mysqli_query($conn, "
            UPDATE users SET
            nama='$nama',
            email='$email',
            tempat_lahir='$tempat',
            tanggal_lahir='$tanggal',
            password='$password_hash'
            WHERE id_user='$id_user'
        ");
    } else {
        $update = mysqli_query($conn, "
            UPDATE users SET
            nama='$nama',
            email='$email',
            tempat_lahir='$tempat',
            tanggal_lahir='$tanggal'
            WHERE id_user='$id_user'
        ");
    }

    if ($update) {
        $pesan = "<div class='alert alert-success'>Data berhasil diperbarui</div>";
    } else {
        $pesan = "<div class='alert alert-danger'>Gagal memperbarui data</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Satu TI - Edit Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-primary mb-4">Edit Akun Pengguna</h2>

    <?= $pesan; ?>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM / NIP</label>
            <input type="text" class="form-control" value="<?= $data['nim']; ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Password Baru</label>
            <input type="password" class="form-control" name="password" placeholder="Kosongkan jika tidak ingin diubah">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $data['email']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat" value="<?= $data['tempat_lahir']; ?>" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal_lahir']; ?>" required>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>
