console.log("actif");

// Boutons des sessions
// Gestionnaire d'événement par les clicks
for (let i = 0; i < sessions.length; i++) {
  sessions[i].addEventListener("click", () => {
    // Ajoute des parametres à l'URL pour filter
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set("session", i + 1);
    urlParams.delete("cours");
    // Actualise l'URL
    window.location.search = urlParams;
  });
}

// Boutons des cours
// Gestionnaire d'événement par les clicks
for (let i = 0; i < cours.length; i++) {
  cours[i].addEventListener("click", () => {
    // Ajoute des parametres à l'URL pour filter
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set("cours", i);
    // Actualise l'URL
    window.location.search = urlParams;
  });
}
