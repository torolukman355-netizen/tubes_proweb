<?php
session_start();

// Hapus semua data session
$_SESSION = array();

// Jika menggunakan cookie session, hapus juga cookienya
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Tambahkan script JS untuk memastikan pindah halaman jika header gagal
echo "<script>
    alert('Anda telah keluar.');
    window.location.href = 'login.php';
</script>";
exit();
?>