document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll("section.competences button");
  const competenceItems = document.querySelectorAll(".competence-item");

  if (buttons.length > 0 && competenceItems.length > 0) {
    buttons.forEach((button, index) => {
      button.addEventListener("click", () => {
        competenceItems[index].classList.toggle("active");
      });
    });

    for (const competence of competenceItems) {
      // Variables
      const itemsImages = competence.querySelectorAll(".item img");
      // Exemple d'une action sur les itemsImages si nécessaire
      itemsImages.forEach((image) => {
        console.log(image.src); // Action de test ou logique adaptée
      });
    }
  } else {
    console.error(
      'Elements avec class "button" ou "competence-item" non trouvé.'
    );
  }
});
