// scripts.js

document.addEventListener("DOMContentLoaded", (event) => {
    console.log("Document is ready.");

    // Adaugă orice funcționalități JavaScript aici
    // Exemplu: schimbați stilul linkurilor de navigare la clic
    const navLinks = document.querySelectorAll("nav ul li a");
    navLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            navLinks.forEach((link) => link.classList.remove("active"));
            event.target.classList.add("active");
        });
    });

    // Adăugare de alte funcționalități similare cu cele de pe Jecza Gallery
});
