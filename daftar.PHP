<?php
// Pastikan file ini ada dan isinya benar
include "koneksi.php";

// Cek apakah variabel $koneksi terbaca
if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dan amankan string
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nim      = mysqli_real_escape_string($koneksi, $_POST['nim_nip']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tempat   = mysqli_real_escape_string($koneksi, $_POST['tempat']);
    $tanggal  = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $role     = mysqli_real_escape_string($koneksi, $_POST['role']);

    // --- MULAI PERBAIKAN ---
    
    // 1. Cek apakah NIM atau Email sudah ada di database
    $cek_duplikat = mysqli_query($koneksi, "SELECT nim_nip, email FROM users WHERE nim_nip = '$nim' OR email = '$email'");

    if (mysqli_num_rows($cek_duplikat) > 0) {
        // Jika ditemukan data (artinya sudah ada)
        echo "<script>
                alert('Pendaftaran Gagal! NIM/NIP atau Email sudah terdaftar sebelumnya.');
                window.history.back(); // Kembali ke halaman form
              </script>";
        exit; // Hentikan script agar tidak lanjut ke proses INSERT
    }

    // --- AKHIR PERBAIKAN ---

    // 2. Jika lolos pengecekan (tidak ada duplikat), baru lakukan INSERT
    $sql = "INSERT INTO users 
            (nama_lengkap, nim_nip, email, password, tempat_lahir, tanggal_lahir, role)
            VALUES
            ('$nama', '$nim', '$email', '$password', '$tempat', '$tanggal', '$role')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Pendaftaran berhasil! Silakan Login.');
                window.location='login.php';
              </script>";
    } else {
        $error = mysqli_error($koneksi);
        echo "<script>
                alert('Gagal daftar. Error: $error');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran SATU TI</title>
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>

<div class="container">

    <div class="left">
        <img src="image/logo.png" class="logo-img">
    </div>

    <div class="right">
        <h2>Daftar Akun</h2>

        <form method="post">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="nim" placeholder="NIM / NIP" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <div class="input-row">
                <input type="text" name="tempat" placeholder="Tempat Lahir" required>
                <input type="date" name="tanggal" required>
            </div>

            <select name="role" required>
                <option value="" disabled selected>Daftar sebagai</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="dosen">Dosen</option>
            </select>

            <button type="submit">Daftar</button>
        </form>

        <p class="login">
            Sudah punya akun? <a href="login.php">Login</a>
        </p>
    </div>

</div>
<!-- <script src="js/daftar.js"></script> -->
</body>
</body>
</html>
