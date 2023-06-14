let tekst_overlay = document.getElementById("tekstoverlay");

window.onload = function () {
  tekst_overlay.style.opacity = "0";
  tekst_overlay.style.transform = "translateX(50px)";

  setTimeout(function () {
    tekst_overlay.style.opacity = "1";
    tekst_overlay.style.transform = "translateX(0)";
  }, 100);
};
