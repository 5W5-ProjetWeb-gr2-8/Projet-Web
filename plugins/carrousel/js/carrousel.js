let indexActuel = 0;
let items = document.querySelectorAll(".carrousel-item");
let indications = document.querySelectorAll(".indication");
let titreProjet = document.getElementById("titre-projet"); // Sélectionne l'élément titre

// Tableau des titres de projets
let titres = [
  "Projet web en équipe",
  "Triptyque",
  "Projet web en équipe",
  "Réalité virtuelle",
  "Création 3D",
];

function afficherImage(index) {
  items.forEach((item, i) => {
    item.style.transform = `translateX(${-index * 100}%)`;
    indications[i].classList.toggle("active", i === index);
  });

  // Vérifie si l'élément titre-projet existe avant de mettre à jour son texte
  if (titreProjet) {
    titreProjet.textContent = titres[index]; // Change le texte du titre
  }
}

function changerImage(direction) {
  indexActuel = (indexActuel + direction + items.length) % items.length;
  afficherImage(indexActuel);
}

function montrerImage(index) {
  indexActuel = index;
  afficherImage(indexActuel);
}

// Initialiser la première image
afficherImage(indexActuel);
