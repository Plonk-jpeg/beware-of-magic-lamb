//MERCI GOOGLE
//joue l'audio des que le DOM est charger
window.addEventListener("DOMContentLoaded", event => {
  const audio = document.querySelector("audio");
  audio.volume = 1;
  audio.play();
});