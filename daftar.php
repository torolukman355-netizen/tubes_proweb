<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran SATU TI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .login-text {
            text-align: center;
            margin-top: 15px;
        }
        .login-text a {
            color: #4CAF50;
            text-decoration: none;
        }
        .login-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Daftar Akun</h2>
        <form action="#" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

            <label for="nim">NIM/NIP</label>
            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM/NIP" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>

            <label for="tempat">Tempat Lahir</label>
            <input type="text" id="tempat" name="tempat" placeholder="Masukkan tempat lahir" required>

            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <button type="submit">Daftar</button>
        </form>
        <div class="login-text">
            Sudah punya akun? <a href="login.html">Login</a> di sini
        </div>
    </div>
</body>
</html>
<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "nama_database_anda"; 
$table = "users";          


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama_lengkap = $conn->real_escape_string($_POST['nama']);
    $nim_nip = $conn->real_escape_string($_POST['nim']);
    $email = $conn->real_escape_string($_POST['email']);
    $tempat_lahir = $conn->real_escape_string($_POST['tempat']);
    $tanggal_lahir = $conn->real_escape_string($_POST['tanggal']);
    
    
    $raw_password = $_POST['password'];
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
    
    
    $tanggal_daftar = date('Y-m-d H:i:s');

    
    $sql = "INSERT INTO $table (nama_lengkap, nim_nip, password, email, tempat_lahir, tanggal_lahir, tanggal_daftar)
            VALUES ($nama_lengkap, $nim_nip, $hashed_password, $email, $tempat_lahir, $tanggal_lahir, $tanggal_daftar)";

    
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Error persiapan statement: " . $conn->error);
    }

    
    $stmt->bind_param("sssssss", $nama_lengkap, $nim_nip, $hashed_password, $email, $tempat_lahir, $tanggal_lahir, $tanggal_daftar);

    
    if ($stmt->execute()) {
        echo "Pendaftaran berhasil! Data telah disimpan.";
        // Atau arahkan pengguna ke halaman login:
        // header("Location: login.html");
        // exit();
    } else {
        echo "Error: " . $stmt->error;
    }

   
    $stmt->close();
} else {
    echo "Metode permintaan tidak valid.";
}

// Menutup koneksi database
$conn->close();
?>