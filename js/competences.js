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
  } else {
    console.error('Elements with class "button" or "competence-item" not found.');
  }
});

