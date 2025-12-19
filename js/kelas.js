document.addEventListener('DOMContentLoaded', function () {
  
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 20) {
            navbar.style.boxShadow = '0 10px 30px rgba(0,0,0,0.08)';
        } else {
            navbar.style.boxShadow = 'none';
        }
    });

 
    document.querySelectorAll('.btn-lihat').forEach(btn => {
        btn.addEventListener('click', function () {
      
            const namaKelas = this.dataset.kelas; 
            localStorage.setItem("kelas", namaKelas);
            // --------------------------------------------------

            const params = new URLSearchParams({
                kelas: namaKelas,
                mk: this.dataset.mk,
                dosen: this.dataset.dosen
            });
            

            window.location.href = 'detail_kelas.php?' + params.toString();
        });
    });
});