// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.querySelectorAll('.login-button');
    const loginModal = document.getElementById('login-modal');
    const closeButtons = document.querySelectorAll('.close');
    const forgotPasswordLink = document.querySelector('#login-form a');
    const forgotPasswordModal = document.getElementById('forgot-password-modal');

    loginButton.forEach(button => {
        button.addEventListener('click', () => {
            loginModal.style.display = 'block';
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            loginModal.style.display = 'none';
            forgotPasswordModal.style.display = 'none';
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        }
        if (event.target == forgotPasswordModal) {
            forgotPasswordModal.style.display = 'none';
        }
    });

    forgotPasswordLink.addEventListener('click', (event) => {
        event.preventDefault();
        loginModal.style.display = 'none';
        forgotPasswordModal.style.display = 'block';
    });
});
// Modal and Slideshow functionality
document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.querySelectorAll('.login-button');
    const loginModal = document.getElementById('login-modal');
    const closeButtons = document.querySelectorAll('.close');
    const forgotPasswordLink = document.querySelector('#login-form a');
    const forgotPasswordModal = document.getElementById('forgot-password-modal');

    loginButton.forEach(button => {
        button.addEventListener('click', () => {
            loginModal.style.display = 'block';
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            loginModal.style.display = 'none';
            forgotPasswordModal.style.display = 'none';
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        }
        if (event.target == forgotPasswordModal) {
            forgotPasswordModal.style.display = 'none';
        }
    });

    forgotPasswordLink.addEventListener('click', (event) => {
        event.preventDefault();
        loginModal.style.display = 'none';
        forgotPasswordModal.style.display = 'block';
    });

    // Slideshow functionality
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides,3000); //Change image every 3 seconds
        dots[slideIndex-1].className += " active";
    }
});
