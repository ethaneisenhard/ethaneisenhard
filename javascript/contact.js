var contactBTN = document.querySelectorAll(".js-contact");
var contactModalEl = document.querySelector(".js-contact-modal");
var contactModalWrapperEl = document.querySelector(".js-contact-modal-wrapper");
var contactModalBackgroundEl = document.querySelector(".js-contact-modal-background");

function toggleContact(){
    contactModalEl.classList.toggle("is-hidden")
    contactModalBackgroundEl.classList.toggle("is-hidden")

    setTimeout(function(){
        contactModalBackgroundEl.classList.toggle("is-active")
    }, 20)

    setTimeout(function(){
        contactModalWrapperEl.classList.toggle("is-opacity-0")
    }, 50)

    setTimeout(function(){
        contactModalWrapperEl.classList.toggle("is-open")
    }, 60)
}

contactBTN.forEach(element => element.addEventListener("click", toggleContact));
