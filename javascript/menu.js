var menuBTN = document.querySelectorAll(".js-toggle-menu");
var sideBarEl = document.querySelector(".js-side-bar")
var sideBarBackground = document.querySelector(".js-side-bar-background");

function toggleMenu(){
    sideBarEl.classList.toggle("is-open")
    sideBarBackground.classList.toggle("is-hidden")
    setTimeout(() => {
      sideBarBackground.classList.toggle("is-opacity-0")
    },10);
}

menuBTN.forEach(element => element.addEventListener("click", toggleMenu));

window.onload = function () {
  sideBarEl.classList.add("animate-transform");
};

