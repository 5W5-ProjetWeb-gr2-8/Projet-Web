console.log("actif");
// // Fonction pour naviguer vers les cours correspondant
// function goToCours(id) {
//   document.getElementById(id).scrollIntoView({ behavior: "smooth" });
// }

// Fonction pour afficher ou cacher les détails du cours
// function toggleCours(btn) {
//   const coursDetails = btn.parentNode.nextElementSibling;
//   const isVisible = coursDetails.style.display === "block";
//   coursDetails.style.display = isVisible ? "none" : "block";
//   btn.textContent = isVisible ? "+" : "-";
// }

// Sélection des boutons de sessions
const sessions = document.querySelectorAll('.session');
// Gestionnaire d'événement par les clicks
for (let i = 0; i < sessions.length; i++) {
  sessions[i].addEventListener("click", () => {
    // Ajoute des parametres à l'URL pour filter
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('session', i+1);
    // Actualise l'URL
    window.location.search = urlParams;
  });
}

// Sélection des éléments dans le DOM
const cours = document.querySelectorAll(".cours");
const boiteCours = document.getElementsByClassName("cours-boxes");