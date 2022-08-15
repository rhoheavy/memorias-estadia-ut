//Grab what we need
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

//Event listeners

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
