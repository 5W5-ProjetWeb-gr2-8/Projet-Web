// Fonction pour naviguer vers les cours correspondant
function goToCours(id) {
  document.getElementById(id).scrollIntoView({ behavior: "smooth" });
}

// Fonction pour afficher ou cacher les détails du cours
function toggleCours(btn) {
  const coursDetails = btn.parentNode.nextElementSibling;
  const isVisible = coursDetails.style.display === "block";
  coursDetails.style.display = isVisible ? "none" : "block";
  btn.textContent = isVisible ? "+" : "-";
}

// Fonction pour afficher ou cacher les détails du cours de session choisie. 
document.querySelectorAll(".session").forEach((session) => {
  session.addEventListener("click", () => {

    // Remove "active" class from all sessions
    document.querySelectorAll(".session").forEach((session) => {
      session.classList.remove("active");
    })
    // toggle Active class
   session.classList.toggle("active");
  });
});
