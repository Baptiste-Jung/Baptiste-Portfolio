const menuButton = document.querySelector(".burger");
const menu = document.querySelector("ul");

menuButton.addEventListener("click", () => {
    console.log("Le bouton a été cliqué !");
    menu.classList.toggle("menu");
});