let menuHamburger = document.querySelector(".menu_hamburger");
let menuListe = document.querySelector(".menu_liste");

menuHamburger.addEventListener("click", () => {
  menuListe.classList.toggle("active");
});
