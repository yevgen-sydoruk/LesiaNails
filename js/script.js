// Burger Toggel
const nav = document.querySelector(".header__nav");
const burger = document.querySelector("#burger");

function toggleMenu() {
    if (nav.classList.contains("header__nav-show-nav")) {
        // burger.classList.remove("burger__nav");
        burger.classList.remove("close-burger__nav");
        nav.classList.remove("header__nav-show-nav");
    } else {
        nav.classList.add("header__nav-show-nav");
        burger.classList.add("close-burger__nav");
    }
}

burger.addEventListener("click", toggleMenu);
