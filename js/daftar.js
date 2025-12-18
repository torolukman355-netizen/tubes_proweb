document.addEventListener('DOMContentLoaded', function() {
    
    // --- 1. FITUR TOGGLE PASSWORD (MATA) ---
    d
    const passwordInputs = document.querySelectorAll('input[type="password"]');
    
    passwordInputs.forEach(function(passwordInput) {
        // Buat wrapper agar posisi ikon rapi
        const wrapper = document.createElement('div');
        wrapper.style.position = 'relative';
        wrapper.style.width = '100%';
        wrapper.style.display = 'flex';
        wrapper.style.alignItems = 'center';
        
        // Masukkan wrapper ke sebelum input, lalu pindahkan input ke dalam wrapper
        passwordInput.parentNode.insertBefore(wrapper, passwordInput);
        wrapper.appendChild(passwordInput);
        
        // Buat tombol mata
        const toggleBtn = document.createElement('span');
        toggleBtn.innerHTML = '👁️'; 
        toggleBtn.style.position = 'absolute';
        toggleBtn.style.right = '15px';
        toggleBtn.style.cursor = 'pointer';
        toggleBtn.style.color = '#888';
        toggleBtn.style.fontSize = '1.2rem';
        toggleBtn.style.userSelect = 'none'; 
        
        wrapper.appendChild(toggleBtn);
        
        // Event Klik Mata
        toggleBtn.addEventListener('click', function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleBtn.style.opacity = '1';
                toggleBtn.style.color = '#333'; 
            } else {
                passwordInput.type = "password";
                toggleBtn.style.opacity = '0.5';
                toggleBtn.style.color = '#888';
            }
        });
    });

    // --- 2. EFEK LOADING TOMBOL SAAT SUBMIT ---
    const formElement = document.querySelector('form');
    
    if (formElement) {
        formElement.addEventListener('submit', function(e) {
           
            const button = formElement.querySelector('button[type="submit"]');
            
            if (button) {
               
                const originalText = button.innerText;
                button.innerText = "Memproses...";
                button.style.opacity = "0.7";
                button.style.cursor = "wait";
                
                
            }
        });
    }
});