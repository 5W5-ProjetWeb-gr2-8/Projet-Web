let indexActuel = 0;
const items = document.querySelectorAll(".carrousel-item");
const indications = document.querySelectorAll(".indication");
const titreProjet = document.getElementById("titre-projet"); // Sélectionne l'élément titre

// Tableau des titres de projets
const titres = [
  "Lacryma",
  "Triptyque",
  "Inserxion",
  "Réalité virtuelle",
  "Dystopie chronique",
];

function afficherImage(index) {
  items.forEach((item, i) => {
    item.style.transform = `translateX(${-index * 100}%)`;
    indications[i].classList.toggle("active", i === index);
  });

  // Met à jour le titre du projet
  titreProjet.textContent = titres[index]; // Change le texte du titre
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
