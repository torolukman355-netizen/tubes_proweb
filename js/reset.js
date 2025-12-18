document.addEventListener('DOMContentLoaded', function() {
    
    const resetForm = document.getElementById('resetForm');
    const emailInput = document.getElementById('email');
    const submitBtn = document.querySelector('button[type="submit"]');

    resetForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah reload halaman

        const emailVal = emailInput.value.trim();

        if(!emailVal) {
            alert("Harap masukkan NIP/NIM atau Email!");
            return;
        }

        // Efek Loading
        const originalText = submitBtn.textContent;
        submitBtn.textContent = "Mengirim...";
        submitBtn.style.backgroundColor = "#ccc";
        submitBtn.disabled = true;

        // Simulasi proses kirim email (2 detik)
        setTimeout(() => {
            // Tampilkan pesan sukses
            alert(`Link reset password telah dikirim ke:\n${emailVal}\n\nSilakan cek email Anda.`);
            
            // Kembalikan tombol seperti semula
            submitBtn.textContent = "Terkirim!";
            submitBtn.style.backgroundColor = "#00995D";
            
            // Redirect otomatis ke halaman login setelah 1 detik
            setTimeout(() => {
                window.location.href = "login.php";
            }, 1000);

        }, 2000);
    });

});