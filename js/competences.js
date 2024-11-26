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
      const flecheGauche = competence.querySelector(".flecheGauche");
      const flecheDroite = competence.querySelector(".flecheDroite");
      // Toggle la classe inactif si affiché dans les 3 projets
      for (let i = 0; i < itemsImages.length; i++) {
        itemsImages[i].parentElement.classList.toggle("inactif");
        if (i > 2) {
          console.log(itemsImages[i].className);
          itemsImages[i].parentElement.classList.toggle("inactif");
        }
      }
      // Fonction d'interaction avec les flèches
      flecheDroite.addEventListener("click", () => {
        console.log("click droit");
        for (let i = 0; i < itemsImages.length; i++) {
          if (itemsImages[i] == itemsImages.length) {
            itemsImages[i].src = itemsImages[0].src;
          } else {
            itemsImages[i].src = itemsImages[i + 1].src;
          }
        }
      });
      flecheGauche.addEventListener("click", () => {
        console.log("click gauche");
        for (let i = 0; i < itemsImages.length; i++) {
          if (itemsImages[i] == 0) {
            itemsImages[i].src = itemsImages[itemsImages.length].src;
          } else {
            itemsImages[i].src = itemsImages[i - 1].src;
          }
        }
      });
      // EN COURS
      // let afterStyle = document.createElement("style");
      // afterStyle.innerHTML = ".inactif:after {content: '';position: absolute;background-color: rgba(0, 0, 0, 0.7);top: 0;left: 0;right: 0px;bottom: 0;}";
      // document.head.appendChild(afterStyle);
      // afterStyle.innerHTML = afterStyle.innerHTML.replace("rgba(0, 0, 0, 0.7);", "rgba(0, 0, 0, 0.2;");
    }
  } else {
    console.error(
      'Elements with class "button" or "competence-item" not found.'
    );
  }
});
