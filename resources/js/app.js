import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.querySelector("form")?.addEventListener("submit", () => {
    document.getElementById("loading")?.classList.remove("hidden");
});
