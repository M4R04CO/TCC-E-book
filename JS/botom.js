var botom = document.getElementById("botom");
var menu = document.getElementById("menu");

botom.addEventListener("click", function() {
  if (menu.style.display === "none") {
    menu.style.display = "flex";
    setTimeout(function() {
      menu.style.opacity = 1;
    }, 10);
  } else {
    menu.style.opacity = 0;
    setTimeout(function() {
      menu.style.display = "none";
    }, 300);
  }
});