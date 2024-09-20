// Sélection des éléments dans le DOM
const questions = document.querySelectorAll(".question");
const boiteReponse = document.getElementById("boite-reponse");

// Questions et réponses prédéfinies en français
const questionsReponses = {
  question1: {
    question: "Question 1",
    reponse: "Voici la réponse à la question 1.",
  },
  question2: {
    question: "Question 2",
    reponse: "Voici la réponse à la question 2.",
  },
  question3: {
    question: "Question 3",
    reponse: "Voici la réponse à la question 3.",
  },
  question4: {
    question: "Question 4",
    reponse: "Voici la réponse à la question 4.",
  },
  question5: {
    question: "Question 5",
    reponse: "Voici la réponse à la question 5.",
  },
};

// Gestion des événements pour afficher les réponses
questions.forEach((question) => {
  question.addEventListener("click", () => {
    const data = questionsReponses[question.getAttribute("data-question")];
    boiteReponse.querySelector(".question-affichee").textContent =
      data.question;
    boiteReponse.querySelector(".reponse-affichee").textContent = data.reponse;
  });
});
