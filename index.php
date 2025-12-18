<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu TI - Portal Akademik</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/index.css">
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
        <a class="nav-link active" href="index.php"><i class="fa-solid fa-house"></i> Beranda</a>
        <a class="nav-link" href="profil_dosen.php"><i class="fa-solid fa-chalkboard-user"></i> Dosen</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="jadwalDrop" data-bs-toggle="dropdown"><i class="fa-solid fa-calendar-days"></i> Jadwal</a>
            <ul class="dropdown-menu border-0 shadow-sm ms-3">
                <li><a class="dropdown-item" href="jadwal_dosen.php">Jadwal Dosen</a></li>
                <li><a class="dropdown-item" href="jadwal_mahasiswa.php">Jadwal Kuliah</a></li>
            </ul>
        </div>
        <a class="nav-link" href="kelas.php"><i class="fa-solid fa-graduation-cap"></i> Kelas</a>
    </nav>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-end mb-5">
        <div>
            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Portal Resmi</span>
            <h1 class="display-6 fw-bold m-0">Teknologi Informasi</h1>
        </div>
        <div class="text-muted small fw-medium d-none d-md-block">
            <i class="fa-solid fa-clock me-1"></i> Terakhir update: 18 Des 2025
        </div>
    </div>

    <div class="row mb-5 g-4">
        <div class="col-lg-7">
            <div class="card h-100 p-4 border-0 shadow-sm">
                <h2 class="fw-bold mb-4" style="color: var(--usu-green);">Membangun Fondasi untuk Masa Depan Digital</h2>
                <div class="text-justify text-secondary">
                    <p>Program Studi S-1 Teknologi Informasi berfokus pada pengembangan keilmuan di bidang <b>Data Science</b> dan <b>Intelligent System</b> untuk menghasilkan lulusan yang unggul dan profesional dengan daya saing global.</p>
                    <p>Kurikulum kami dirancang untuk memberikan dasar yang kuat dalam kecerdasan buatan, keamanan server, dan pengelolaan infrastruktur data.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row g-3">
                <div class="col-6"><img src="image/fasilkom.webp" class="grid-image shadow-sm" alt="USU"></div>
                <div class="col-6"><img src="image/ti.webp" class="grid-image shadow-sm" alt="USU"></div>
                <div class="col-6"><img src="image/ti1.webp" class="grid-image shadow-sm" alt="USU"></div>
                <div class="col-6"><img src="image/pendopo.jpg" class="grid-image shadow-sm" alt="USU"></div>
            </div>
        </div>
    </div>

    <div class="vision-mission-box mb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3"><i class="fa-solid fa-lightbulb me-2"></i> Visi</h2>
                <p class="lead opacity-75">Menjadi Program Studi yang unggul dan profesional dalam pengembangan bidang TI berbasis Data Science.</p>
            </div>
            <div class="col-md-6 border-start border-white border-opacity-25 ps-md-5">
                <h2 class="fw-bold mb-3"><i class="fa-solid fa-rocket me-2"></i> Misi Utama</h2>
                <p class="opacity-75">Menyelenggarakan pendidikan berkualitas dan riset inovatif demi masyarakat digital Indonesia.</p>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <h2 class="text-center mb-4 text-info"><i class="fa-solid fa-newspaper me-2"></i> Berita dan Kegiatan Terbaru</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/PUI.webp" class="card-img-top-custom" alt="Workshop PUI Rintisan">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold" id="judul-b1">Workshop Pembuatan Roadmap PUI Rintisan di Fasilkom-TI USU</h5>
                        <p class="card-text text-truncate-3 small text-muted">
                            Fakultas Ilmu Komputer dan Teknologi Informasi USU menyelenggarakan Workshop Pembuatan Roadmap PUI Rintisan sebagai langkah strategis memperkuat arah penelitian dan inovasi...
                        </p>
                        <button type="button" class="btn btn-sm btn-outline-success rounded-pill w-100 mt-2 trigger-modal" 
                            data-bs-toggle="modal" data-bs-target="#beritaModal"
                            data-judul="Workshop Pembuatan Roadmap PUI Rintisan di Fasilkom-TI USU"
                            data-tanggal="12 November 2025"
                            data-konten="Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara (Fasilkom-TI USU) menyelenggarakan Workshop Pembuatan Roadmap PUI Rintisan sebagai langkah strategis memperkuat arah penelitian dan inovasi di lingkungan fakultas. Kegiatan ini berlangsung dengan melibatkan para narasumber berpengalaman dari berbagai institusi. Workshop menghadirkan dua narasumber utama, yaitu: Ibu Sri Widyaningsih, S.T., M.M., Ph.D., Direktur Pusat Unggulan IPTEKS Perguruan Tinggi Strategic Advancement for Key Digital Transformation Indonesia Universitas Telkom; dan Bapak Dr. Eng. Asep Suhendi, S.Si., M.Si., Direktur Pusat Unggulan IPTEKS Perguruan Tinggi Intelligent Sensing Internet of Things Universitas Telkom.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 12 November 2025</small>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/thumbnail don mariano.webp" class="card-img-top-custom" alt="Mahasiswa Inbound Filipina">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold" id="judul-b2">Fasilkom-TI USU Sambut Mahasiswa Inbound dari Filipina</h5>
                        <p class="card-text text-truncate-3 small text-muted">
                            Fasilkom-TI USU menyambut enam mahasiswa dan satu dosen dari DMMMSU, Filipina, dalam program Inbound Student and Faculty Exchange...
                        </p>
                        <button type="button" class="btn btn-sm btn-outline-success rounded-pill w-100 mt-2 trigger-modal" 
                            data-bs-toggle="modal" data-bs-target="#beritaModal"
                            data-judul="Fasilkom-TI USU Sambut Mahasiswa Inbound dari Don Mariano Marcos Memorial State University, Filipina"
                            data-tanggal="18 Oktober 2025"
                            data-konten="Medan, Oktober 2025 — Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara (Fasilkom-TI USU) menyambut enam mahasiswa dan satu dosen pendamping dari Don Mariano Marcos Memorial State University (DMMMSU), Filipina, dalam program Inbound Student and Faculty Exchange Program yang dilaksanakan pada 5–18 Oktober 2025. Program ini merupakan implementasi dari kerja sama internasional antara Fasilkom-TI USU dan DMMMSU yang telah terjalin melalui MoA. Kegiatan ini bertujuan memperkuat hubungan kelembagaan, memperluas jejaring akademik, serta memberikan pengalaman lintas budaya.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 18 Oktober 2025</small>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/thumbnail ICCAI.webp" class="card-img-top-custom" alt="ICCAI Conference">
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold" id="judul-b3">ICCAI 2025 di USU: Sukses Gelar Konferensi Internasional Bergengsi</h5>
                        <p class="card-text text-truncate-3 small text-muted">
                            Fasilkom-TI USU sukses menyelenggarakan The 7th International Conference on Computing and Applied Informatics (ICCAI 2025) secara hybrid...
                        </p>
                        <button type="button" class="btn btn-sm btn-outline-success rounded-pill w-100 mt-2 trigger-modal" 
                            data-bs-toggle="modal" data-bs-target="#beritaModal"
                            data-judul="ICCAI 2025 di USU: Fasilkom-TI Sukses Gelar Konferensi Internasional Bergengsi"
                            data-tanggal="16 September 2025"
                            data-konten="Medan, September 2025 — Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara (Fasilkom-TI USU) sukses menyelenggarakan The 7th International Conference on Computing and Applied Informatics (ICCAI 2025) pada tanggal 16–17 September 2025. Konferensi ini menerima 257 makalah, dengan 86 makalah terpilih untuk dipresentasikan. Tiga narasumber utama yang dihadirkan memberikan wawasan mendalam mengenai Emerging Research in Computer Science and IT in Digital Transformation.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 16 September 2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="mb-5">
        <div class="section-title d-flex align-items-center mb-4">
            <div style="width: 5px; height: 30px; background: #dc3545; border-radius: 10px;" class="me-3"></div>
            <h3 class="fw-bold m-0"><i class="fa-solid fa-medal me-2 text-danger"></i> Prestasi</h3>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/ti4.webp" class="card-img-top-custom" alt="Juara IMT-GT">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold" id="judul-p1">Mahasiswi Fasilkom-TI USU Menjadi Salah Satu Peraih Prestasi di IMT-GT Varsity Carnival 2025</h5>
                        <p class="card-text text-truncate-3 text-muted small">Atikah Shabrina Siregar, mahasiswi Fasilkom-TI USU, berprestasi di IMT-GT 2025 Thailand. USU raih Best Overall, Best Paper, Best Presentation, dan penghargaan Mixed Group.</p>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill w-100 mt-2 trigger-modal" data-bs-toggle="modal" data-bs-target="#beritaModal" data-judul="Prestasi IMT-GT Varsity Carnival 2025" data-tanggal="31 Oktober 2025" data-konten="Atikah Shabrina Siregar, mahasiswi Fasilkom-TI USU, meraih prestasi di IMT-GT Varsity Carnival 2025 Thailand. USU berhasil meraih Best Overall, Best Paper, Best Presentation, dan penghargaan Mixed Group dalam ajang kompetisi ilmiah dan seni bergengsi tersebut. Keberhasilan ini menambah daftar panjang prestasi internasional yang diraih oleh mahasiswa Program Studi TI.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 31 Okt 2025</small>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/ti3.webp" class="card-img-top-custom" alt="NASA Space Apps Challenge">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold" id="judul-p2">Tim Mahasiswa Fasilkom-TI USU Raih Dua Penghargaan di NASA International Space Apps Challenge 2025</h5>
                        <p class="card-text text-truncate-3 text-muted small">Tim mahasiswa Fasilkom-TI USU memenangkan Global Nominees dan Most Impactful Project di NASA Space Apps Challenge 2025 dengan website mitigasi asteroid.</p>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill w-100 mt-2 trigger-modal" data-bs-toggle="modal" data-bs-target="#beritaModal" data-judul="NASA Space Apps Challenge 2025" data-tanggal="29 Oktober 2025" data-konten="Tim mahasiswa Fasilkom-TI USU memenangkan Global Nominees dan Most Impactful Project di NASA Space Apps Challenge 2025 dengan website mitigasi asteroid. MEDAN – Fakultas Ilmu Komputer dan Teknologi Informasi (Fasilkom-TI) Universitas Sumatera Utara (USU) kembali menunjukkan dominasinya dalam inovasi teknologi tingkat global. Tim 'Gerakan Cinta NASA Medan,' yang seluruh anggotanya merupakan mahasiswa S-1 Ilmu Komputer, berhasil meraih dua penghargaan prestisius dalam ajang NASA International Space Apps Challenge 2025.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 29 Okt 2025</small>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="image/ti2.webp" class="card-img-top-custom" alt="USU Awards">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold" id="judul-p3">Fasilkom-TI Raih Berbagai Penghargaan Prestisius di USU Awards 2025</h5>
                        <p class="card-text text-truncate-3 text-muted small">Fasilkom-TI meraih berbagai penghargaan di USU Awards 2025, termasuk dosen, prodi, dan mahasiswa yang unggul di tingkat nasional dan internasional.</p>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill w-100 mt-2 trigger-modal" data-bs-toggle="modal" data-bs-target="#beritaModal" data-judul="USU Awards 2025" data-tanggal="9 Desember 2025" data-konten="Fakultas Ilmu Komputer dan Teknologi Informasi (Fasilkom-TI) Universitas Sumatera Utara kembali menorehkan prestasi membanggakan pada malam penganugerahan USU Awards 2025, dengan sejumlah dosen, program studi, dan mahasiswa meraih penghargaan di berbagai kategori bergengsi. Dr. T. Henny Febriana Harumy, S.Kom., M.Kom dianugerahi Penghargaan Terbaik II Kontributor SDGs Terbaik.">
                            Baca Selengkapnya
                        </button>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <small class="text-muted"><i class="fa-regular fa-calendar me-1"></i> 9 Des 2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="beritaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="modalTitle">Detail Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="badge bg-primary-subtle text-primary mb-3" id="modalDate"></div>
                <div id="modalContent" class="text-justify text-secondary" style="line-height: 1.7;"></div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary px-4 rounded-pill" data-bs-dismiss="modal">Tutup</button>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="js/index.js"></script>
</body>
</html>