window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
            navbarCollapsible.classList.remove('scrolled');
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            navbarCollapsible.classList.add('scrolled');
        }
    };

    // Shrink the navbar and change background color when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Initial check to apply the correct navbar state
    navbarShrink();

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    
    document.getElementById('pelayananPaket').addEventListener('change', function() {
        var pelayananPaket = this.value;
        var jumlahPesertaInput = document.getElementById('jumlahPeserta');
        var submitButton = document.querySelector('button[type="submit"]');
        
        // Set minimum number of participants based on selected package
        if (pelayananPaket === 'paket1') {
            jumlahPesertaInput.setAttribute('min', '20');
        } else if (pelayananPaket === 'paket2') {
            jumlahPesertaInput.setAttribute('min', '25');
        }
    
        // Check if the number of participants is below the required minimum
        jumlahPesertaInput.addEventListener('input', function() {
            var jumlahPeserta = parseInt(this.value);
            var warningLabel = document.getElementById('warningLabel');
    
            if ((pelayananPaket === 'paket1' && jumlahPeserta < 20) || (pelayananPaket === 'paket2' && jumlahPeserta < 25)) {
                // Create and add warning label if it doesn't exist
                if (!warningLabel) {
                    warningLabel = document.createElement('label');
                    warningLabel.setAttribute('id', 'warningLabel');
                    warningLabel.setAttribute('class', 'text-danger');
                    warningLabel.innerHTML = (pelayananPaket === 'paket1') ? 'Jumlah peserta harus minimal 20 untuk Paket 1' : 'Jumlah peserta harus minimal 25 untuk Paket 2';
                    this.parentNode.appendChild(warningLabel);
                } else {
                    // Update warning message based on selected package
                    warningLabel.innerHTML = (pelayananPaket === 'paket1') ? 'Jumlah peserta harus minimal 20 untuk Paket 1' : 'Jumlah peserta harus minimal 25 untuk Paket 2';
                }
                submitButton.disabled = true;
            } else {
                // Remove warning label if it exists
                if (warningLabel) {
                    warningLabel.parentNode.removeChild(warningLabel);
                }
                submitButton.disabled = !isFormValid();
            }
        });
    }); 

    const namaPemesanInput = document.getElementById('namaPemesan');
    const nomorTelpInput = document.getElementById('nomerTelp');
    const wisataInput = document.getElementById('wisata');
    const waktuPerjalananInput = document.getElementById('waktuPerjalanan');
    const pelayananPaketInput = document.getElementById('pelayananPaket');
    const jumlahPesertaInput = document.getElementById('jumlahPeserta');
    const submitButton = document.querySelector('button[type="submit"]');
    const warningLabel = document.getElementById('warningLabel');
    
    function isFormValid() {
        return namaPemesanInput.value.trim() !== '' &&
            nomorTelpInput.value.trim() !== '' &&
            wisataInput.value.trim() !== '' &&
            waktuPerjalananInput.value.trim() !== '' &&
            pelayananPaketInput.value.trim() !== '' &&
            jumlahPesertaInput.value.trim() !== '';
    }
    
    function validateForm() {
        const pelayananPaket = pelayananPaketInput.value;
        const jumlahPeserta = parseInt(jumlahPesertaInput.value);
        let valid = isFormValid();

        if (pelayananPaket === 'paket1' && jumlahPeserta < 20) {
            warningLabel.innerHTML = 'Jumlah peserta harus minimal 20 untuk Paket 1';
            warningLabel.style.display = 'block';
            valid = false;
        } else if (pelayananPaket === 'paket2' && jumlahPeserta < 25) {
            warningLabel.innerHTML = 'Jumlah peserta harus minimal 25 untuk Paket 2';
            warningLabel.style.display = 'block';
            valid = false;
        } else {
            warningLabel.style.display = 'none';
        }
        
        submitButton.disabled = !valid;
    }
    
    // Disable submit button initially
    submitButton.disabled = true;
    
    namaPemesanInput.addEventListener('input', validateForm);
    nomorTelpInput.addEventListener('input', validateForm);
    wisataInput.addEventListener('input', validateForm);
    waktuPerjalananInput.addEventListener('input', validateForm);
    pelayananPaketInput.addEventListener('input', validateForm);
    jumlahPesertaInput.addEventListener('input', validateForm);
    
    pelayananPaketInput.addEventListener('change', function() {
        const pelayananPaket = this.value;
        if (pelayananPaket === 'paket1') {
            jumlahPesertaInput.setAttribute('min', '20');
        } else if (pelayananPaket === 'paket2') {
            jumlahPesertaInput.setAttribute('min', '25');
        }
        validateForm();
    });
    
    jumlahPesertaInput.addEventListener('input', validateForm);
});
