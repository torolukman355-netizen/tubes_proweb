        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.nav-item.dropdown');  // Target dropdown Jadwal
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            const dropdownToggle = dropdown.querySelector('.dropdown-toggle');

            dropdown.addEventListener('mouseenter', function() {
                dropdownMenu.classList.add('show');
                dropdownToggle.setAttribute('aria-expanded', 'true');
            });

            dropdown.addEventListener('mouseleave', function() {
                dropdownMenu.classList.remove('show');
                dropdownToggle.setAttribute('aria-expanded', 'false');
            });
        });

        function renderJadwal() {
            const dosen = document.getElementById("pilihDosen").value;
            const c = document.getElementById("jadwalContainer");
            c.innerHTML = "";

            if (!dosen) {
                c.innerHTML = `<div class="alert alert-light shadow-sm rounded-4">Silakan pilih dosen terlebih dahulu</div>`;
                return;
            }

            if (dosen === "ivan") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Pemrograman Web", "TI - Kom C", "C-104", "08.00 - 10.30")])}
                    ${cardHari("Jumat", [kelas("Pemrograman Web", "TI - Kom B", "C-104", "08.00 - 10.30")])}
                `;
            }

            if (dosen === "ade") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Dasar Pemrograman", "TI - Kom B", "C-102", "10.30 - 13.00")])}
                    ${cardHari("Kamis", [kelas("Dasar Pemrograman", "TI - Kom C", "C-102", "13.50 - 16.20")])}
                `;
            }

            if (dosen === "aghni") {
                c.innerHTML = `
                    ${cardHari("Kamis", [
                        kelas("Matematika Dasar", "TI - Kom B", "C-104", "08.00 - 10.30"),
                        kelas("Matematika Dasar", "TI - Kom A", "C-104", "10.30 - 13.00")
                    ])}
                `;
            }

            if (dosen === "fanindia") {
                c.innerHTML = `
                    ${cardHari("Jumat", [kelas("Pengantar Teknologi Informasi", "TI - Kom C", "C-101", "08.00 - 10.30")])}
                `;
            }

            if (dosen === "maulida") {
                c.innerHTML = `
                    ${cardHari("Kamis", [kelas("Matematika Dasar", "TI - Kom C", "C-102", "08.00 - 10.30")])}
                `;
            }

            if (dosen === "niskarto") {
                c.innerHTML = `
                    ${cardHari("Jumat", [kelas("Organisasi dan Arsitektur Komputer", "TI - Kom B", "C-101", "10.30 - 12.10")])}
                `;
            }

            if (dosen === "fahrurrozi") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Organisasi dan Arsitektur Komputer", "TI - Kom C", "C-104", "10.30 - 12.10")])}
                `;
            }

            if (dosen === "opim") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Dasar Pemrograman", "TI - Kom A", "C-101", "08.00 - 10.30")])}
                `;
            }

            if (dosen === "seniman") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Organisasi dan Arsitektur Komputer", "TI - Kom A", "C-104", "14.40 - 16.20")])}
                `;
            }

            if (dosen === "umaya") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Pengantar Teknologi Informasi", "TI - Kom B", "C-102", "08.00 - 10.30")])}
                    ${cardHari("Jumat", [kelas("Pemrograman Web", "TI - Kom A", "C-102", "08.00 - 10.30")])}
                `;
            }

            if (dosen === "fadly") {
                c.innerHTML = `
                    ${cardHari("Rabu", [kelas("Pengantar Teknologi Informasi", "TI - Kom A", "C-101", "10.30 - 13.00")])}
                `;
            }
        }

        function cardHari(hari, isi) {
            return `
                <div class="card day-card mb-4">
                    <div class="card-header day-header fw-semibold">${hari}</div>
                    <div class="card-body">
                        ${isi.join("")}
                    </div>
                </div>
            `;
        }

        function kelas(mk, kelas, ruang, jam) {
            return `
                <div class="class-item">
                    <div>
                        <h6 class="mb-1 fw-semibold">${mk}</h6>
                        <small class="text-muted">${kelas} • ${ruang}</small>
                    </div>
                    <span class="badge badge-time">${jam}</span>
                </div>
            `;
        }
