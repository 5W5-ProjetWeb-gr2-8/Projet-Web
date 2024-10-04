function toggleCours() {
  const details = document.querySelector(".cours-details");
  const btn = document.querySelector(".btn-plus");

  if (details.style.display === "none" || details.style.display === "") {
    details.style.display = "block";
    btn.textContent = "-";
  } else {
    details.style.display = "none";
    btn.textContent = "+";
  }
}
