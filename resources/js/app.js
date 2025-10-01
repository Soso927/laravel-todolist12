import './bootstrap';
import '../css/app.css';


// mise en place du menu hamburger pour la partie header 

(() => {
    const btn = document.getElementById('menu-toggle');
    const menu = document.getElementById('main-menu');

    if (!btn || !menu) return;

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
})();
