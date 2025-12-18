
    document.addEventListener('DOMContentLoaded', function() {
        /**1. PENGATURAN MODAL DINAMIS*/
        const beritaModal = document.getElementById('beritaModal');
        if (beritaModal) {
            beritaModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget; 
                
                
                const judul = button.getAttribute('data-judul');
                const tanggal = button.getAttribute('data-tanggal');
                const konten = button.getAttribute('data-konten');

         
                const modalTitle = beritaModal.querySelector('#modalTitle');
                const modalDate = beritaModal.querySelector('#modalDate');
                const modalContent = beritaModal.querySelector('#modalContent');

                modalTitle.textContent = judul;
                modalDate.innerHTML = `<i class="fa-solid fa-calendar-day me-2"></i>${tanggal}`;
                modalContent.innerHTML = konten;
            });

        
            beritaModal.addEventListener('hidden.bs.modal', () => {
                beritaModal.querySelector('#modalContent').innerHTML = '';
            });
        }

        /*2. EFEK NAVBAR SAAT SCROLL*/
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1)';
                navbar.style.padding = '0.5rem 1.5rem'; // Navbar mengecil sedikit
            } else {
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '0.75rem 1.5rem';
            }
        });

        /* 3. INTERAKSI SEARCH BOX*/
        const searchInput = document.querySelector('.search-box input');
        const searchIcon = document.querySelector('.search-box i');

        if (searchInput) {
            searchInput.addEventListener('focus', () => {
                searchIcon.style.color = 'var(--usu-green)';
            });

            searchInput.addEventListener('blur', () => {
                searchIcon.style.color = 'var(--text-muted)';
            });

            searchInput.addEventListener('keyup', (e) => {
               
                if (e.key === 'Enter') {
                    alert('Mencari: ' + searchInput.value);
                }
            });
        }

      
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                if(this.getAttribute('href') !== "#") {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
 const beritaModal = document.getElementById('beritaModal');
    if (beritaModal) {
        beritaModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            document.getElementById('modalTitle').textContent = button.getAttribute('data-judul');
            document.getElementById('modalDate').textContent = button.getAttribute('data-tanggal');
            document.getElementById('modalContent').textContent = button.getAttribute('data-konten');
        });
    }