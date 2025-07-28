document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });

    const loginForm = document.querySelector('.form');
    const username = document.querySelector('#username');
    const passwordInput = document.querySelector('#password');
    const errorMessage = document.querySelector('#errorMessage');
    const loginBtn = document.querySelector('#loginBtn');
    const loader = document.querySelector('#loader');

    if (errorMessage.textContent.trim() !== '') {
        errorMessage.style.display = 'block';
    }

    loginForm.addEventListener('submit', function(e) {
        if(username.value.trim() === '' || passwordInput.value.trim() === '') {
            e.preventDefault();
            errorMessage.textContent = 'Please fill in all fields';
            errorMessage.style.display = 'block';
            return false;
        } else if(passwordInput.value.length < 6) {
            e.preventDefault();
            errorMessage.textContent = 'La contraseña debe tener al menos 6 caracteres';
            errorMessage.style.display = 'block';
            return false;
        }

    loginBtn.disabled = true;
    loader.style.display = 'inline-block';
    loginBtn.value = 'Logging in...';

    return true;
    });

    const inputBoxes = document.querySelectorAll('.inputBox input');
    inputBoxes.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentNode.querySelector('i').style.color = '#00ff84';
        });

        input.addEventListener('blur', function() {
            this.parentNode.querySelector('i').style.color = '#fff';
        });
    });

    const spans = document.querySelectorAll('section span');
    spans.forEach((span, index) => {
        span.style.animationDuration = `${15 + (index * 5)}s`;
        span.style.animationDelay = `${index * -5}s`;
    });
});
