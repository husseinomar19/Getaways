let tekst_overlay = document.getElementById("tekstoverlay");

window.onload = function () {
  tekst_overlay.style.opacity = "0";
  tekst_overlay.style.transform = "translateX(50px)";

  setTimeout(function () {
    tekst_overlay.style.opacity = "1";
    tekst_overlay.style.transform = "translateX(0)";
  }, 100);
};

function showCustomAlert() {
  document.getElementById("customAlert").style.display = "block";
}

function hideCustomAlert() {
  document.getElementById("customAlert").style.display = "none";
}

function redirectToIndex() {
  window.location.href = "index.php";
}
