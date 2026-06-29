window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.header-area');

    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('intro-video');
    const overlay = document.getElementById('intro-overlay');

    if (video && overlay) {
        video.play();

        video.addEventListener('ended', () => {
            overlay.style.opacity = '0';

            setTimeout(() => {
                overlay.remove();
            }, 500);
        });
    }
});video.addEventListener('ended', () => {
    overlay.classList.add('fade-out');

    setTimeout(() => {
        overlay.remove();
    }, 500);
});