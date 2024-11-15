// const competenceHeaders = document.querySelectorAll(".competence-header");

// competenceHeaders.forEach((header) => {
//   header.addEventListener("click", () => {
//     const parent = header.parentElement;
//     parent.classList.toggle("active");

//     const icon = header.querySelector(".competence-icon");
//     icon.textContent = parent.classList.contains("active") ? "-" : "+";
//   });
// });

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
      const itemsImages = competence.querySelectorAll(".item img");
      // EN COURS
      const flechesGauche = competence.querySelectorAll(".flecheGauche");
      const flechesDroite = competence.querySelectorAll(".flecheDroite");
      for (let i = 0; i < itemsImages.length; i++) {
        itemsImages[i].parentElement.classList.toggle("inactif");
        if(i>2) {
          console.log(itemsImages[i].className);
          itemsImages[i].parentElement.classList.toggle("inactif");
        }
      }
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
