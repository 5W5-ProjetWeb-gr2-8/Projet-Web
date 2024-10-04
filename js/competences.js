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
  const button = document.querySelector("section.competences button");
  const competenceItem = document.querySelector(".competence-item");

  if (button && competenceItem) {
    button.addEventListener("click", () => {
      competenceItem.classList.toggle("active");
    });
  } else {
    console.error('Element with class "button" or "competence-item" not found.');
  }
});