<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Satu TI - Portal</title>
<link rel="stylesheet" href="css/jadwal_dosen.css">
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
                <div class="text-end d-none d-sm-block"></div>
                <div style="width: 42px; height: 42px; background: var(--usu-green); border-radius: 12px; display: grid; place-items: center; color: white;">
                    <i class="fa-solid fa-user"></i>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 py-2" style="border-radius: 15px;">
                <li><a class="dropdown-item py-2" href="profil.php"><i class="fa-solid fa-id-card me-2"></i> Profil Saya</a></li>
                <li><a class="dropdown-item py-2" href="edit_akun.php"><i class="fa-solid fa-gear me-2"></i> Pengaturan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item py-2 text-danger" href="logout.php"><i class="fa-solid fa-power-off me-2"></i> Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="sidebar">
    <nav class="nav flex-column">
        <a class="nav-link " href="index.php"><i class="fa-solid fa-house"></i> Beranda</a>
        <a class="nav-link" href="profil_dosen.php"><i class="fa-solid fa-chalkboard-user"></i> Dosen</a>
        <div class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="jadwalDrop" data-bs-toggle="dropdown"><i class="fa-solid fa-calendar-days"></i> Jadwal</a>
            <ul class="dropdown-menu border-0 shadow-sm ms-3">
                <li><a class="dropdown-item" href="jadwal_dosen.php">Jadwal Dosen</a></li>
                <li><a class="dropdown-item" href="jadwal_mahasiswa.php">Jadwal Kuliah</a></li>
            </ul>
        </div>
        <a class="nav-link" href="kelas.php"><i class="fa-solid fa-graduation-cap"></i> Kelas</a>
    </nav>
</div>
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2">TEKNOLOGI INFORMASI</h1>
        </div>

        <!-- Content -->
        <h3 class="fw-bold mb-1">Jadwal Mengajar Dosen</h3>
        <p class="text-muted mb-4">Pilih dosen untuk melihat jadwal mengajarnya</p>

        <!-- SELECT DOSEN -->
        <div class="mb-4" style="max-width:420px">
            <select class="form-select form-select-lg shadow-sm" id="pilihDosen" onchange="renderJadwal()">
                <option value="">🎓 Pilih Dosen</option>
                <option value="ivan">Ivan Jaya, S.Si., M.Kom.</option>
                <option value="ade">Ade Sarah Huzaifah, S.Kom., M.Kom.</option>
                <option value="aghni">Aghni Syahmarani, S.Si., M.Si.</option>
                <option value="fadly">Mohammad Fadly Syahputra, B.Sc., M.Sc.IT</option>
                <option value="fanindia">Fanindia Purnamasari, S.TI,M.IT</option>
                <option value="maulida">Maulida Yanti S.Si., M.Si.</option>
                <option value="niskarto">Dr. Niskarto Zendrato, S.Kom., M.Kom</option>
                <option value="opim">Prof. Dr. Drs. Opim Salim Sitompul, M.Sc</option>
                <option value="fahrurrozi">Fahrurrozi Lubis, B.IT., M.Sc.IT</option>
                <option value="seniman">Seniman, S.Kom, M.Kom</option>
                <option value="umaya">Umaya Ramadhani Putri Nasution, S.TI, M.Kom</option>
            </select>
        </div>

        <div id="jadwalContainer"></div>
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
                <a href="index.php" class="footer-link">Beranda</a>
                <a href="profil_dosen.php" class="footer-link">Dosen</a>
                <a href="jadwal_mahasiswa.php" class="footer-link">Jadwal Perkuliahan</a>
                <a href="kelas.php" class="footer-link">Informasi Kelas</a>
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
 <script src="js/jadwal_dosen.js"></script>
</body>
</html>