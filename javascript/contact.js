var contactBTN = document.querySelectorAll(".js-contact");
var contactModalEl = document.querySelector(".js-contact-modal");
var contactModalWrapperEl = document.querySelector(".js-contact-modal-wrapper");
var contactModalBackgroundEl = document.querySelector(
  ".js-contact-modal-background"
);

function toggleContact() {
  contactModalEl.classList.toggle("is-hidden");
  contactModalBackgroundEl.classList.toggle("is-hidden");

  setTimeout(function () {
    contactModalBackgroundEl.classList.toggle("is-active");
  }, 20);

  setTimeout(function () {
    contactModalWrapperEl.classList.toggle("is-opacity-0");
  }, 50);

  setTimeout(function () {
    contactModalWrapperEl.classList.toggle("is-open");
  }, 60);
}

contactBTN.forEach((element) =>
  element.addEventListener("click", toggleContact)
);

console.log(
  `%c
|    ____________________________________________________     |
|   |                                                    |    |
|   |                                                    |    |
|   |   Site Created by Ethan Eisenhard                  |    |
|   |   Built With                                       |    |
|   |   Host: https://www.netlify.com/                   |    |
|   |   HTML, CSS, JS                                    |    |
|   |   Built with Eleventy                              |    |
|   |   https://www.svgbackgrounds.com/                  |    |
|   |   All pictures taken by Ethan Eisenhard            |    |
|   |   https://github.com/ethaneisenhard/ethaneisenhard |    |
|   |                                                    |    |
|   |                                                    |    |
|   |                                                    |    |
|   |____________________________________________________|    |
          ___________________________________________
      _-'    .-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.  --- -_
      _-.-.-. .---.-.-.-.-.-.-.-.-.-.-.-.-.-.-.--.  .-.-.-_
      _-'.-.-.-. .---.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-. .-.-.-.-_
      _-'.-.-.-.-. .-----.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-----. .-.-.-.-.-_
      _-'.-.-.-.-.-. .---.-. .-------------------------. .-.---. .---.-.-.-.-_
      :-------------------------------------------------------------------------:`,
  "font-family:monospace"
);
