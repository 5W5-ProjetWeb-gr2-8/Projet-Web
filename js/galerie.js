document.addEventListener("DOMContentLoaded", () => {
  // Récupérer les éléments de filtre et les conteneurs de projets
  const filtres = document.querySelectorAll(".conteneur_filtre input");
  const projets = document.querySelectorAll(".conteneur_projet");

  // Fonction pour filtrer les projets
  const filtrerProjets = () => {
    const filtresActifs = Array.from(filtres)
      .filter((filtre) => filtre.checked)
      .map((filtre) => filtre.id.toLowerCase());

    projets.forEach((projet) => {
      const classesProjet = Array.from(
        projet.querySelector(".projet_filtre").classList
      );
      const visible =
        filtresActifs.length === 0 ||
        filtresActifs.some((filtre) =>
          classesProjet.includes(`gal_proj_${filtre}`)
        );
      projet.style.display = visible ? "flex" : "none";
    });
  };

  // Attacher la fonction de filtrage à chaque filtre
  filtres.forEach((filtre) => {
    filtre.addEventListener("change", filtrerProjets);
  });
});
