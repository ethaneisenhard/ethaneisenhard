var menuBTN = document.querySelectorAll(".js-toggle-menu");
var sideBarEl = document.querySelector(".js-side-bar")

function toggleMenu(){
    sideBarEl.classList.toggle("is-open")
    
    if(menuBTN.innerText === "MENU"){
      menuBTN.innerText = "Close"
    }else{
      menuBTN.innerText = "MENU" 
    }
    
}

menuBTN.forEach(element => element.addEventListener("click", toggleMenu));
