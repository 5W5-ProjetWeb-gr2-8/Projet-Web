const questions = document.querySelectorAll(".question");
const reponseBox = document.getElementById("reponse-box");

const reponses = {
  réponse1: "Voici la réponse à la question 1.",
  réponse2: "Voici la réponse à la question 2.",
  réponse3: "Voici la réponse à la question 3.",
  réponse4: "Voici la réponse à la question 4.",
  réponse5: "Voici la réponse à la question 5.",
};

questions.forEach((question) => {
  question.addEventListener("click", () => {
    const reponse = reponses[question.getAttribute("data-reponse")];
    reponseBox.textContent = reponse;
  });
});
