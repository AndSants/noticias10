import './bootstrap';

document.querySelector("form")?.addEventListener("submit", () => {
    document.getElementById("loading")?.classList.remove("hidden");
});
