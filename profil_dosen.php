<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Satu TI - Portal</title>

 <link rel="stylesheet" href="css/profil_dosen.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand me-4" href="#">
                <img src="image/logo usu.jpg" alt="USU">
                <img src="image/satuti.png" alt="Satu TI" class="ms-1">
            </a>
            <div class="search-box d-none d-lg-block">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="form-control" placeholder="Cari info akademik, dosen, atau berita...">
            </div>
        </div>

        <div class="dropdown user-dropdown">
            <a class="d-flex align-items-center gap-3 text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                <div class="text-end d-none d-sm-block">
                    <div class="fw-bold text-dark" style="font-size: 0.9rem;">Nama Pengguna</div>
                    <div class="text-muted" style="font-size: 0.75rem;">Mahasiswa Aktif</div>
                </div>
                <div style="width: 42px; height: 42px; background: var(--usu-green); border-radius: 12px; display: grid; place-items: center; color: white;">
                    <i class="fa-solid fa-user"></i>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 py-2" style="border-radius: 15px;">
                <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-id-card me-2"></i> Profil Saya</a></li>
                <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-gear me-2"></i> Pengaturan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item py-2 text-danger" href="#"><i class="fa-solid fa-power-off me-2"></i> Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="sidebar">
    <nav class="nav flex-column">
        <a class="nav-link" href="index.php"><i class="fa-solid fa-house"></i> Beranda</a>
        <a class="nav-link active" href="profil_dosen.php"><i class="fa-solid fa-chalkboard-user"></i> Dosen</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="jadwalDrop" data-bs-toggle="dropdown"><i class="fa-solid fa-calendar-days"></i> Jadwal</a>
            <ul class="dropdown-menu border-0 shadow-sm ms-3">
                <li><a class="dropdown-item" href="jadwal_dosen.php">Jadwal Dosen</a></li>
                <li><a class="dropdown-item" href="jadwal_mahasiswa.php">Jadwal Kuliah</a></li>
            </ul>
        </div>
        <a class="nav-link " href="kelas.php"><i class="fa-solid fa-graduation-cap"></i> Kelas </a>
    </nav>
</div>

<div class="main-content">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">TEKNOLOGI INFORMASI</h1>
        </div>
        <h6 class="mb-4">Profil Dosen</h6>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak ivan.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Ivan Jaya S.Si., M.Kom.</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198407072015041001</td></tr>
<tr><th>NIDN</th><td>0107078404</td></tr>
<tr><th>NUPTK</th><td>7039762663130333</td></tr>
<tr><th>Email</th><td>ivanjaya@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>


<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/ibu umaya.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Umaya Ramadhani Putri Nasution S.TI., M.Kom.</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>199104112024062001</td></tr>
<tr><th>NIDN</th><td>0011049114</td></tr>
<tr><th>NUPTK</th><td>9743769670230312</td></tr>
<tr><th>Email</th><td>umaya.nst@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>


<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/ibu ade.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Ade Sarah Huzaifah S.Kom., M.Kom</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198506302018032001</td></tr>
<tr><th>NIDN</th><td>0130068502</td></tr>
<tr><th>NUPTK</th><td>8962763664230212</td></tr>
<tr><th>Email</th><td>adesarah@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak niskarto.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Dr. Niskarto Zendrato S.Kom., M.Kom</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198909192018051001</td></tr>
<tr><th>NIDN</th><td>0119098902</td></tr>
<tr><th>NUPTK</th><td>8251767668131053</td></tr>
<tr><th>Email</th><td>niskarto@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/ibu fanindia.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Fanindia Purnamasari S.TI., M.IT</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198908172019032023</td></tr>
<tr><th>NIDN</th><td>0017088907</td></tr>
<tr><th>NUPTK</th><td>4149767668230493</td></tr>
<tr><th>Email</th><td>fanindia@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak fadly.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Mohammad Fadly Syah Putra, B.Sc., M.Sc.IT</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198301292009121003</td></tr>
<tr><th>NIDN</th><td>0029018304</td></tr>
<tr><th>NUPTK</th><td>3461761662130172</td></tr>
<tr><th>Email</th><td>nca.fadly@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak opim.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Prof. Dr. Drs. Opim Salim Sitompul M.Sc</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>196108171987011001</td></tr>
<tr><th>NIDN</th><td>0017086108</td></tr>
<tr><th>NUPTK</th><td>4149739640130123</td></tr>
<tr><th>Email</th><td>opim@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak lubis.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Fahrurrozi Lubis B.IT., M.Sc.IT</h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198610122018052001</td></tr>
<tr><th>NIDN</th><td>0012108604</td></tr>
<tr><th>NUPTK</th><td>6344764665130283</td></tr>
<tr><th>Email</th><td>fahrurrozi.lubis@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/pak niman.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Seniman S.Kom., M.Kom. </h5>
<p class="text-muted">FASILKOMTI - Teknologi Informasi</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198705252014041001</td></tr>
<tr><th>NIDN</th><td>0025058704</td></tr>
<tr><th>NUPTK</th><td>4857765666131112</td></tr>
<tr><th>Email</th><td>pakniman@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/ibu aghni.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Aghni Syahmarani S.Si., M.Si.</h5>
<p class="text-muted">FMIPA - Matematika</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>198712092015042004</td></tr>
<tr><th>NIDN</th><td>0009128703</td></tr>
<tr><th>NUPTK</th><td>7541765666230233</td></tr>
<tr><th>Email</th><td>aghni.syahmarani@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

<div class="card shadow-sm p-4 mb-4">
<div class="row">
<div class="col-md-4 text-center">
<img src="image/ibu maulida.png" class="profile-img mb-3" alt="Foto Dosen" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
<h5>Maulida Yanti S.Si., M.Si.</h5>
<p class="text-muted">FMIPA - Matematika</p>
</div>

<div class="col-md-8">
<table class="table">
<tr><th>NIP</th><td>199110242020122020</td></tr>
<tr><th>NIDN</th><td>0024109003</td></tr>
<tr><th>NUPTK</th><td>8356768669230303</td></tr>
<tr><th>Email</th><td>maulidayanti@usu.ac.id</td></tr>
</table>
</div>
</div>
</div>

</div>
<footer class="portal-footer">
    <div class="container-fluid px-5">

        <div class="row gy-4">
            <!-- Logo & Deskripsi -->
            <div class="col-lg-4">
                <img 
                    src="image/logo.png" 
                    alt="Logo Satu TI" 
                    class="mb-3"
                    style="filter: brightness(0) invert(1); height: 40px;"
                >

                <p class="small opacity-50 pe-lg-5 text-justify">
                    Program Studi S1 Teknologi Informasi USU berfokus pada keunggulan
                    akademik dan riset di bidang Data Science untuk masa depan Indonesia.
                </p>

                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white opacity-50 hover-opacity-100">
                        <i class="fa-brands fa-instagram fs-5"></i>
                    </a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100">
                        <i class="fa-brands fa-facebook fs-5"></i>
                    </a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100">
                        <i class="fa-brands fa-youtube fs-5"></i>
                    </a>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-title">Navigasi</h6>
                <a href="#" class="footer-link">Beranda</a>
                <a href="#" class="footer-link">Dosen</a>
                <a href="#" class="footer-link">Jadwal Perkuliahan</a>
                <a href="#" class="footer-link">Informasi Kelas</a>
            </div>

            <!-- Kontak -->
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-title">Kontak Kami</h6>
                <p class="small mb-2">
                    <i class="fa-solid fa-location-dot me-2 text-success"></i>
                    Gedung Fasilkom-TI, Kampus USU, Medan
                </p>
                <p class="small mb-2">
                    <i class="fa-solid fa-envelope me-2 text-success"></i>
                    ti@usu.ac.id
                </p>
                <p class="small mb-2">
                    <i class="fa-solid fa-phone me-2 text-success"></i>
                    (061) 8218XXX
                </p>
            </div>
        </div>

        <hr class="my-5 opacity-10">

        <div class="text-center small opacity-50">
            &copy; 2025 S1 Teknologi Informasi – Universitas Sumatera Utara.
            All Rights Reserved.
        </div>

    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Script untuk menangani pencarian dosen secara real-time
        document.querySelector('.search-box input').addEventListener('keyup', function() {
            let value = this.value.toLowerCase();
            let cards = document.querySelectorAll('.main-content .card');

            cards.forEach(card => {
                let name = card.querySelector('h5').textContent.toLowerCase();
                if (name.indexOf(value) > -1) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });
        });
    </script>
</body>
</body>
</html>