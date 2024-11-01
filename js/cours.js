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
    // toggle Active class
    session.classList.toggle("active");
  });
});

function myFunction() {
  document.getElementById("myButton").onclick = function () {
    var BordurCouleur = document.getElementsByClassName("cours-boxes");
    var FondCouleur = document.getElementsByClassName("leCours");
    var borderColor = getComputedStyle(document.documentElement)
      .getPropertyValue("--couleur-bordur-video")
      .trim();
    var backgroundColor = getComputedStyle(document.documentElement)
      .getPropertyValue("--couleur-video")
      .trim();
    for (var i = 0; i < BordurCouleur.length; i++) {
      BordurCouleur[i].style.borderColor = borderColor;
      FondCouleur[i].style.backgroundColor = backgroundColor;
    }
  };
}

// // Sélection des éléments dans le DOM
// const cours = document.querySelectorAll(".cours");
// const boiteCours = document.getElementsByClassName("cours-boxes");
