const competenceHeaders = document.querySelectorAll(".competence-header");

competenceHeaders.forEach((header) => {
  header.addEventListener("click", () => {
    const parent = header.parentElement;
    parent.classList.toggle("active");

    const icon = header.querySelector(".competence-icon");
    icon.textContent = parent.classList.contains("active") ? "-" : "+";
  });
});
