document.addEventListener("DOMContentLoaded", () => {
  const menuBurger = document.getElementById("menu-burger-wordpress");
  const menu = document.querySelector(".menu-menu-principal-container .menu");

  menuBurger.addEventListener("click", () => {
    menu.classList.toggle("actif"); // Ajoute ou retire la classe 'actif' au menu
  });
});
