<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Satu TI - Jadwal Mahasiswa</title>
 <link rel="stylesheet" href="css/jadwal_mahasiswa.css">
 
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


<h3 class="mb-4">Jadwal Kuliah Mahasiswa</h3>
<p class="text-muted">Jadwal mata kuliah untuk kelas TI - Kom A</p>

<!-- HARI RABU -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Rabu
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Dasar Pemrograman</h6>
                <small class="text-muted">Prof. Dr. Drs. Opim Salim Sitompul, M.Sc</small><br>
                <small>Kelas: TI - Kom A | Ruang: C-101</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Pengantar Teknologi Informasi</h6>
                <small class="text-muted">Mohammad Fadly Syahputra, B.Sc., M.Sc.IT</small><br>
                <small>Kelas: TI - Kom A | Ruang: C-101</small>
            </div>
            <span class="badge bg-primary align-self-start">10.30 - 13.00</span>
        </div>

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Organisasi dan Arsitektur Komputer</h6>
                <small class="text-muted">Seniman, S.Kom, M.Kom</small><br>
                <small>Kelas: TI - Kom A | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">14.40 - 16.20</span>
        </div>

    </div>
</div>

<!-- HARI KAMIS -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Kamis
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Matematika Dasar</h6>
                <small class="text-muted">Aghni Syahmarani, S.Si, M.Si.</small><br>
                <small>Kelas: TI - Kom A | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">10.30 - 13.00</span>
        </div>
    </div>
</div>

<!-- HARI JUMAT -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Jumat
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between">
            <div>
                <h6 class="mb-1">Pemrograman Web</h6>
                <small class="text-muted">Umaya Ramadhani Putri Nasution, S.TI, M.Kom</small><br>
                <small>Kelas: TI - Kom A | Ruang: C-102</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>

    </div>
</div>

<p class="text-muted">Jadwal mata kuliah untuk kelas TI - Kom B</p>

<!-- HARI RABU -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Rabu
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Pengantar Teknologi Informasi</h6>
                <small class="text-muted">Umaya Ramadhani Putri Nasution, S.TI, M.Kom</small><br>
                <small>Kelas: TI - Kom B | Ruang: C-102</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Dasar Pemrograman</h6>
                <small class="text-muted">Ade Sarah Huzaifah, S.Kom., M.Kom</small><br>
                <small>Kelas: TI - Kom B | Ruang: C-102</small>
            </div>
            <span class="badge bg-primary align-self-start">10.30 - 13.00</span>
        </div>
    </div>
</div>

<!-- HARI KAMIS -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Kamis
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Matematika Dasar</h6>
                <small class="text-muted">Aghni Syahmarani, S.Si, M.Si.</small><br>
                <small>Kelas: TI - Kom B | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>
    </div>
</div>

<!-- HARI JUMAT -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Jumat
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Pemrograman Web</h6>
                <small class="text-muted">Ivan Jaya, S.Si., M.Kom.</small><br>
                <small>Kelas: TI - Kom B | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Organisasi dan Arsitektur Komputer</h6>
                <small class="text-muted">Dr. Niskarto Zendrato, S.Kom., M.Kom</small><br>
                <small>Kelas: TI - Kom B | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">10.30 - 12.10</span>
        </div>
    </div>
</div>

        
        <p class="text-muted">Jadwal mata kuliah untuk kelas TI - Kom C</p>

<!-- HARI RABU -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Rabu
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Pemrograman Web</h6>
                <small class="text-muted">Ivan Jaya, S.Si., M.Kom</small><br>
                <small>Kelas: TI - Kom C | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Organisasi dan Arsitektur Komputer</h6>
                <small class="text-muted">Fahrurrozi Lubis, B.IT., M.Sc.IT</small><br>
                <small>Kelas: TI - Kom C | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">10.30 - 12.10</span>
        </div>
    </div>
</div>

<!-- HARI KAMIS -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Kamis
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Matematika Dasar</h6>
                <small class="text-muted">Maulida Yanti S.Si., M.Si.</small><br>
                <small>Kelas: TI - Kom C | Ruang: C-104</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>
        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Dasar Pemrograman</h6>
                <small class="text-muted">Ade Sarah Huzaifah, S.Kom., M.Kom</small><br>
                <small>Kelas: TI - Kom C | Ruang: C-102</small>
            </div>
            <span class="badge bg-primary align-self-start">13.50 - 16.20</span>
        </div>
    </div>
</div>

<!-- HARI JUMAT -->
<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-semibold">
        Jumat
    </div>
    <div class="card-body">

        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
            <div>
                <h6 class="mb-1">Pengantar Teknologi Informasi</h6>
                <small class="text-muted">Fanindia Purnamasari, S.TI,M.IT</small><br>
                <small>Kelas: TI - Kom C | Ruang: C-101</small>
            </div>
            <span class="badge bg-primary align-self-start">08.00 - 10.30</span>
        </div>
    </div>
</div>
<footer class="portal-footer">
    <div class="container-fluid"> <div class="row gy-4">
            <div class="col-lg-4">
                <img src="image/satuti.png" class="footer-logo" alt="Logo Satu TI"> <p class="small opacity-50 pe-lg-5 text-justify">
                    Program Studi S1 Teknologi Informasi USU berfokus pada keunggulan akademik dan riset di bidang Data Science.
                </p>
            </div>

            <div class="col-lg-4">
                <h6 class="footer-title text-white">Navigasi</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-decoration-none text-secondary small">Beranda</a></li>
                    <li><a href="profil_dosen.php" class="text-decoration-none text-secondary small">Dosen</a></li>
                    <li><a href="#" class="text-decoration-none text-secondary small">Jadwal Perkuliahan</a></li>
                    <li><a href="kelas.php" class="text-decoration-none text-secondary small">Informasi Kelas</a></li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h6 class="footer-title text-white">Kontak Kami</h6>
                <p class="small mb-2"><i class="fa-solid fa-location-dot me-2 text-success"></i> Gedung Fasilkom-TI, Kampus USU, Medan</p>
                <p class="small mb-2"><i class="fa-solid fa-envelope me-2 text-success"></i> ti@usu.ac.id</p>
                <p class="small"><i class="fa-solid fa-phone me-2 text-success"></i> (061) 8218XXX</p>
            </div>
        </div>

        <hr class="my-5 opacity-10">
        <div class="text-center small opacity-50">
            © 2025 S1 Teknologi Informasi – Universitas Sumatera Utara.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mengaktifkan semua dropdown bootstrap
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        });
    });
</script>
</body>

</body>
</html>