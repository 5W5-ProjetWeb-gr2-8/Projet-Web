const menuHamburger = document.querySelector(".menu_hamburger");
const menuListe = document.querySelector(".menu_liste");

menuHamburger.addEventListener("click", () => {
  menuListe.classList.toggle("active");
});
