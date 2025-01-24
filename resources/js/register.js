document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.getElementById('check-with-link');
    const submitButton = document.getElementById('submit-button');
    const form = document.getElementById('register-form');

    // Form gönderimi sırasında kontrol
    form.addEventListener('submit', (e) => {
        if (!checkbox.checked) {
            e.preventDefault(); // Checkbox işaretlenmemişse gönderimi durdur
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lütfen hizmet şartlarını kabul edin.',
            });
        }
    });
});