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
