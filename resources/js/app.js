import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const themeToggleBtn = document.getElementById("theme-toggle");
const rootElement = document.documentElement;

// Check and apply saved theme preference from localStorage
if (localStorage.getItem("theme") === "dark") {
    rootElement.classList.add("dark");
} else {
    rootElement.classList.remove("dark");
}

// Toggle theme and save preference
themeToggleBtn.addEventListener("click", () => {
    if (rootElement.classList.contains("dark")) {
        rootElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
    } else {
        rootElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
    }
});
