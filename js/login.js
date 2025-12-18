document.addEventListener('DOMContentLoaded', function() {
    
    // --- DEFINISI ELEMEN ---
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');
    const loginForm = document.getElementById('loginForm');
    const usernameInput = document.getElementById('username');
    const rememberCheckbox = document.getElementById('remember');
    const submitBtn = document.querySelector('button[type="submit"]');

    // --- 1. FITUR TOGGLE PASSWORD (MATA) ---
    if (toggleIcon && passwordInput) {
        toggleIcon.addEventListener('click', function () {
            // Cek tipe input saat ini
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Ubah tampilan icon (transparansi)
            if (type === 'text') {
                toggleIcon.style.opacity = '1';
                toggleIcon.style.color = '#333';
            } else {
                toggleIcon.style.opacity = '0.5';
                toggleIcon.style.color = '#777';
            }
        });
    }

    // --- 2. FITUR REMEMBER ME (LOAD DATA) ---
    // Saat halaman dibuka, cek apakah ada username tersimpan di LocalStorage
    const savedUser = localStorage.getItem('satu_ti_username');
    if (savedUser) {
        usernameInput.value = savedUser;
        rememberCheckbox.checked = true;
    }

    // --- 3. PROSES SUBMIT FORM ---
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            
            // A. VALIDASI KLIEN SEDERHANA (Opsional)
            if (usernameInput.value.trim() === "" || passwordInput.value.trim() === "") {
                e.preventDefault(); // Cegah kirim jika kosong
                alert("Harap isi Username dan Password!");
                return;
            }

            // B. LOGIKA REMEMBER ME (SIMPAN/HAPUS)
            if (rememberCheckbox.checked) {
                localStorage.setItem('satu_ti_username', usernameInput.value.trim());
            } else {
                localStorage.removeItem('satu_ti_username');
            }

            // C. EFEK LOADING TOMBOL
            // Kita TIDAK menggunakan e.preventDefault() di sini agar PHP tetap jalan
            
            const originalText = submitBtn.innerText;
            submitBtn.innerText = "Memproses...";
            submitBtn.style.opacity = "0.7";
            submitBtn.style.cursor = "wait";
            // Tombol jangan didisable sepenuhnya agar form tetap terkirim oleh browser
            
            // Form akan dikirim ke server (login.php) secara otomatis setelah ini...
        });
    }

});