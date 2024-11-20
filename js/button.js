document.addEventListener("DOMContentLoaded", function () {
  // Récupère tous les boutons avec la classe 'top-right-button'
  const buttons = document.querySelectorAll(".top-right-button");

  // Itère sur chaque bouton et ajoute un écouteur d'événement pour le clic
  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      // Ajoute ou enlève la classe 'clicked' au bouton cliqué
      this.classList.toggle("clicked");
    });
  });
});
