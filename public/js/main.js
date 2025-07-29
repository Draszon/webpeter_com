"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const bgMenuOpen = document.getElementById("bm-open");
    const bgMenuClose = document.getElementById("bm-close");
    const mobileNav = document.getElementById("mobile-nav");

    const open = () => {
        bgMenuClose.classList.add("mobile-nav-close");
        bgMenuOpen.classList.remove("mobile-nav-close");
        mobileNav.classList.add("mobile-nav-open");
    }

    const close = () => {
        bgMenuClose.classList.remove("mobile-nav-close");
        bgMenuOpen.classList.add("mobile-nav-close");
        mobileNav.classList.remove("mobile-nav-open");
    }

    bgMenuClose.addEventListener("click", open);
    bgMenuOpen.addEventListener("click", close);
});
