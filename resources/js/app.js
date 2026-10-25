

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
const authModal = document.getElementById('auth-modal');
const openAuth = document.getElementById('open-auth');
const closeAuth = document.getElementById('close-auth');

if (authModal && openAuth && closeAuth) {
    openAuth.addEventListener('click', () => {
        authModal.classList.remove('hidden');
        authModal.classList.add('flex');
    });

    closeAuth.addEventListener('click', () => {
        authModal.classList.add('hidden');
        authModal.classList.remove('flex');
    });

    authModal.addEventListener('click', (event) => {
        if (event.target === authModal) {
            authModal.classList.add('hidden');
            authModal.classList.remove('flex');
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            authModal.classList.add('hidden');
            authModal.classList.remove('flex');
        }
    });
}
const loginContainer = document.getElementById('login-form-container');
const registerContainer = document.getElementById('register-form-container');
const showRegister = document.getElementById('show-register');
const showLogin = document.getElementById('show-login');

if (loginContainer && registerContainer && showRegister && showLogin) {
    showRegister.addEventListener('click', () => {
        loginContainer.classList.add('hidden');
        registerContainer.classList.remove('hidden');
    });

    showLogin.addEventListener('click', () => {
        registerContainer.classList.add('hidden');
        loginContainer.classList.remove('hidden');
    });
}