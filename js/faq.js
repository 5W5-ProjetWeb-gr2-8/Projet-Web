// Sélection des éléments dans le DOM
let questions = document.querySelectorAll(".question");
let boiteReponse = document.getElementById("boite-reponse");

// Réponses prédéfinies en français
let questionsReponses = {
  question1: {
    reponse:
      "Les TIMS sont un programme de formation en intégration multimédia, combinant la création visuelle et le développement web.",
  },
  question2: {
    reponse:
      "Nous utilisons des outils comme Unity, Photoshop, Figma, Maya, Premiere Pro, After Effects, Audition, Illustrator, ainsi que des langages comme HTML, SCSS, JavaScript, C#, React, et WordPress.",
  },
  question3: {
    reponse:
      "Oui, les étudiants travaillent sur des projets de jeux vidéo en utilisant des moteurs comme Unity.",
  },
  question4: {
    reponse:
      "Oui, vous apprendrez des langages de programmation comme HTML, CSS, JavaScript, et React pour développer des sites et des applications web.",
  },
  question5: {
    reponse:
      "Oui, le programme inclut des cours sur la modélisation 3D avec Maya et d'autres outils.",
  },
};

// Gestion des événements pour afficher les réponses
questions.forEach((question) => {
  question.addEventListener("click", () => {
    let data = questionsReponses[question.getAttribute("data-question")];
    boiteReponse.querySelector(".reponse-affichee").textContent = data.reponse;
  });
});
