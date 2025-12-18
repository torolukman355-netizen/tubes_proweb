const kelasAktif = localStorage.getItem("kelas") || "TI - Kom A";
document.getElementById("judulKelas").innerText = "Kelas " + kelasAktif;

const jadwal = {
    "TI - Kom A": [
        { hari:"Rabu", mk:"Dasar Pemrograman", dosen:"Prof. Dr. Drs. Opim Salim Sitompul, M.Sc", jam:"08.00 - 10.30",
          materi: [{judul:"Kontrak Kuliah"},{judul:"Mengenal Dunia Pemrograman"},{judul:"Algoritma"},{judul:"Flowchart"},{judul:"Mengenal Bahasa C"},{judul:"Quiz 1"},{judul:"Variabel, Konstanta, dan Tipe Data"},{judul:"UTS"},{judul:"Operator"},{judul:"Input/Output"},{judul:"Struktur Pemilihan"},{judul:"Struktur Perulangan"},{judul:"Fungsi"},{judul:"Array"},{judul:"Review"},{judul:"UAS"}] 
        },
        { hari:"Rabu", mk:"Pengantar TI", dosen:"Mohammad Fadly Syahputra, B.Sc., M.Sc.IT", jam:"10.30 - 13.00", 
          materi: [{judul:"Kontrak Kuliah"},{judul:"Pengenalan Komputer"},{judul:"Internet & WWW"},{judul:"Konsep Sistem"},{judul:"Tugas Pengasahan"},{judul:"Presentasi"},{judul:"Multimedia"},{judul:"UTS"},{judul:"Pengembangan Sistem"},{judul:"Telekomunikasi"},{judul:"Database"},{judul:"E-commerce"},{judul:"Diskusi"},{judul:"Lanjutan Diskusi"},{judul:"Presentasi TUBES"},{judul:"UAS"}] 
        },
        { hari:"Rabu", mk:"Organisasi dan Arsitektur Komputer", dosen:"Seniman, S.Kom, M.Kom", jam:"14.40 - 16.20", 
          materi: [{judul:"Pengenalan"},{judul:"AVR,ARM,PIC"},{judul:"Input Output"},{judul:"Sensor PIR"},{judul:"Memory"},{judul:"Timer"},{judul:"Quiz & UTS"},{judul:"UTS"},{judul:"Interuption"},{judul:"Komunikasi Serial"},{judul:"RFID"},{judul:"SPI"},{judul:"I2C"},{judul:"IO Extension"},{judul:"Kisi UAS"},{judul:"UAS"}]
        },
        { hari:"Kamis", mk:"Matematika Dasar", dosen:"Aghni Syahmarani, S.Si, M.Si.", jam:"10.30 - 13.00",
          materi: [{judul:"Himpunan"},{judul:"Bilangan Riel"},{judul:"Fungsi"},{judul:"Limit"},{judul:"Limit Tak Hingga"},{judul:"Continuity"},{judul:"Quiz"},{judul:"UTS"},{judul:"Turunan"},{judul:"Turunan Implicit"},{judul:"Aplikasi Turunan"},{judul:"Diskusi"},{judul:"Diskusi Lanjutan"},{judul:"Integral"},{judul:"Integral Part"},{judul:"UAS"}]
        },
        { hari:"Jumat", mk:"Pemrograman Web", dosen:"Umaya Ramadhani Putri Nasution, S.TI, M.Kom", jam:"08.00 - 10.30", 
          materi: [{judul:"Internet dan Web"},{judul:"HTML"},{judul:"Form & CSS"},{judul:"JavaScript"},{judul:"Bootstrap"},{judul:"Database"},{judul:"Quiz"},{judul:"UTS"},{judul:"PHP"},{judul:"PHP MySQL"},{judul:"PHP MySQL 2"},{judul:"PHP MySQL 3"},{judul:"PHP MySQL 4"},{judul:"Lanjutan PHP"},{judul:"PHP MySQL 5"},{judul:"UAS"}] 
        }
    ],
    "TI - Kom B": [
        { hari:"Rabu", mk:"Pengantar TI", dosen:"Umaya Ramadhani Putri Nasution, S.TI, M.Kom", jam:"08.00 - 10.30", materi: [{judul:"Kontrak Kuliah"},{judul:"Pengenalan Komputer"},{judul:"Internet & WWW"},{judul:"Konsep Sistem"},{judul:"Tugas Pengasahan"},{judul:"Presentasi"},{judul:"Multimedia"},{judul:"UTS"},{judul:"Pengembangan Sistem"},{judul:"Telekomunikasi"},{judul:"Database"},{judul:"E-commerce"},{judul:"Diskusi"},{judul:"Lanjutan Diskusi"},{judul:"Presentasi TUBES"},{judul:"UAS"}] },
        { hari:"Rabu", mk:"Dasar Pemrograman", dosen:"Ade Sarah Huzaifah, S.Kom., M.Kom", jam:"10.30 - 13.00", materi: [{judul:"Kontrak Kuliah"},{judul:"Mengenal Dunia Pemrograman"},{judul:"Algoritma"},{judul:"Flowchart"},{judul:"Mengenal Bahasa C"},{judul:"Quiz 1"},{judul:"Variabel, Konstanta, dan Tipe Data"},{judul:"UTS"},{judul:"Operator"},{judul:"Input/Output"},{judul:"Struktur Pemilihan"},{judul:"Struktur Perulangan"},{judul:"Fungsi"},{judul:"Array"},{judul:"Review"},{judul:"UAS"}] },
        { hari:"Kamis", mk:"Matematika Dasar", dosen:"Aghni Syahmarani, S.Si, M.Si.", jam:"08.00 - 10.30", materi: [{judul:"Himpunan"},{judul:"Bilangan Riel"},{judul:"Fungsi"},{judul:"Limit"},{judul:"Limit Tak Hingga"},{judul:"Continuity"},{judul:"Quiz"},{judul:"UTS"},{judul:"Turunan"},{judul:"Turunan Implicit"},{judul:"Aplikasi Turunan"},{judul:"Diskusi"},{judul:"Diskusi Lanjutan"},{judul:"Integral"},{judul:"Integral Part"},{judul:"UAS"}] },
        { hari:"Jumat", mk:"Pemrograman Web", dosen:"Ivan Jaya, S.Si., M.Kom.", jam:"08.00 - 10.30", materi: [{judul:"Internet dan Web"},{judul:"HTML"},{judul:"Form & CSS"},{judul:"JavaScript"},{judul:"Bootstrap"},{judul:"Database"},{judul:"Quiz"},{judul:"UTS"},{judul:"PHP"},{judul:"PHP MySQL"},{judul:"PHP MySQL 2"},{judul:"PHP MySQL 3"},{judul:"PHP MySQL 4"},{judul:"Lanjutan PHP"},{judul:"PHP MySQL 5"},{judul:"UAS"}] },
        { hari:"Jumat", mk:"Organisasi dan Arsitektur Komputer", dosen:"Dr. Niskarto Zendrato, S.Kom., M.Kom", jam:"10.30 - 12.10", materi: [{judul:"Pengenalan"},{judul:"AVR,ARM,PIC"},{judul:"Input Output"},{judul:"Sensor PIR"},{judul:"Memory"},{judul:"Timer"},{judul:"Quiz & UTS"},{judul:"UTS"},{judul:"Interuption"},{judul:"Komunikasi Serial"},{judul:"RFID"},{judul:"SPI"},{judul:"I2C"},{judul:"IO Extension"},{judul:"Kisi UAS"},{judul:"UAS"}] }
    ],
    "TI - Kom C": [
        { hari:"Rabu", mk:"Pemrograman Web", dosen:"Ivan Jaya, S.Si., M.Kom.", jam:"08.00 - 10.30", materi: [{judul:"Internet dan Web"},{judul:"HTML"},{judul:"Form & CSS"},{judul:"JavaScript"},{judul:"Bootstrap"},{judul:"Database"},{judul:"Quiz"},{judul:"UTS"},{judul:"PHP"},{judul:"PHP MySQL"},{judul:"PHP MySQL 2"},{judul:"PHP MySQL 3"},{judul:"PHP MySQL 4"},{judul:"Lanjutan PHP"},{judul:"PHP MySQL 5"},{judul:"UAS"}] },
        { hari:"Rabu", mk:"Organisasi dan Arsitektur Komputer", dosen:"Fahrurrozi Lubis, B.IT., M.Sc.IT", jam:"10.30 - 12.10", materi: [{judul:"Pengenalan"},{judul:"AVR,ARM,PIC"},{judul:"Input Output"},{judul:"Sensor PIR"},{judul:"Memory"},{judul:"Timer"},{judul:"Quiz & UTS"},{judul:"UTS"},{judul:"Interuption"},{judul:"Komunikasi Serial"},{judul:"RFID"},{judul:"SPI"},{judul:"I2C"},{judul:"IO Extension"},{judul:"Kisi UAS"},{judul:"UAS"}] },
        { hari:"Kamis", mk:"Matematika Dasar", dosen:"Maulida Yanti S.Si., M.Si.", jam:"08.00 - 10.30", materi: [{judul:"Himpunan"},{judul:"Bilangan Riel"},{judul:"Fungsi"},{judul:"Limit"},{judul:"Limit Tak Hingga"},{judul:"Continuity"},{judul:"Quiz"},{judul:"UTS"},{judul:"Turunan"},{judul:"Turunan Implicit"},{judul:"Aplikasi Turunan"},{judul:"Diskusi"},{judul:"Diskusi Lanjutan"},{judul:"Integral"},{judul:"Integral Part"},{judul:"UAS"}] },
        { hari:"Kamis", mk:"Dasar Pemrograman", dosen:"Ade Sarah Huzaifah, S.Kom., M.Kom", jam:"13.50 - 16.20", materi: [{judul:"Kontrak Kuliah"},{judul:"Mengenal Dunia Pemrograman"},{judul:"Algoritma"},{judul:"Flowchart"},{judul:"Mengenal Bahasa C"},{judul:"Quiz 1"},{judul:"Variabel, Konstanta, dan Tipe Data"},{judul:"UTS"},{judul:"Operator"},{judul:"Input/Output"},{judul:"Struktur Pemilihan"},{judul:"Struktur Perulangan"},{judul:"Fungsi"},{judul:"Array"},{judul:"Review"},{judul:"UAS"}] },
        { hari:"Jumat", mk:"Pengantar TI", dosen:"Fanindia Purnamasari, S.TI,M.IT", jam:"08.00 - 10.30", materi: [{judul:"Kontrak Kuliah"},{judul:"Pengenalan Komputer"},{judul:"Internet & WWW"},{judul:"Konsep Sistem"},{judul:"Tugas Pengasahan"},{judul:"Presentasi"},{judul:"Multimedia"},{judul:"UTS"},{judul:"Pengembangan Sistem"},{judul:"Telekomunikasi"},{judul:"Database"},{judul:"E-commerce"},{judul:"Diskusi"},{judul:"Lanjutan Diskusi"},{judul:"Presentasi TUBES"},{judul:"UAS"}] }
    ]
};

function filterHari(hari, el) {
    document.querySelectorAll('.link-hari').forEach(btn => btn.classList.remove('active'));
    el.classList.add('active');

    const container = document.getElementById("jadwalList");
    container.innerHTML = "";

    const data = jadwal[kelasAktif]?.filter(j => j.hari === hari) || [];

    if (data.length === 0) {
        container.innerHTML = `<div class="alert alert-light border shadow-sm p-5 text-center">
            <i class="fa-regular fa-calendar-xmark fs-1 text-muted mb-3 d-block"></i>
            <h5 class="text-muted">Tidak ada jadwal kuliah hari ${hari}.</h5>
        </div>`;
        return;
    }

    data.forEach((j, idx) => {
        let acc = "";
        j.materi.forEach((m, i) => {
            acc += `
            <div class="accordion-item border-0 mb-2 shadow-sm rounded">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#acc${idx}${i}">
                        Pertemuan ${i + 1}
                    </button>
                </h2>
                <div id="acc${idx}${i}" class="accordion-collapse collapse">
                    <div class="accordion-body bg-light">
                        <i class="fa-solid fa-file-circle-check text-success me-2"></i> ${m.judul || "Materi belum tersedia"}
                    </div>
                </div>
            </div>`;
        });

        container.innerHTML += `
        <div class="card schedule-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0 text-dark">${j.mk}</h4>
                <span class="badge-day">${j.hari}</span>
            </div>
            <p class="mb-1 text-secondary"><i class="fa-solid fa-user-tie me-2"></i><strong>Dosen:</strong> ${j.dosen}</p>
            <p class="mb-3 text-secondary"><i class="fa-solid fa-clock me-2"></i><strong>Jam:</strong> ${j.jam} WIB</p>
            <div class="accordion accordion-flush">${acc}</div>
        </div>`;
    });
}


window.onload = function() {
    const defaultBtn = document.querySelector(".link-hari:nth-child(3)");
    filterHari("Rabu", defaultBtn);
};