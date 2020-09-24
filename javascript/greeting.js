var greetingForm = document.querySelector("#greetingForm");
var greetingFormInput = document.querySelector("#greetingForm input");
var overviewMessage = document.querySelector(".js-overview-text");
var welcomeMessage = document.querySelector(".js-overview-welcome-message");
var userName = document.querySelector(".js-user-name");
var userFirstNameLocalStorage = localStorage.getItem("userFirstName");
var randomFactButton = document.querySelector(".js-random-fact");

greetingForm.addEventListener("submit", storeUser);
// randomFactButton.addEventListener("click", randomFunFact);

function storeUser(event) {
  event.preventDefault();
  localStorage.setItem("userFirstName", greetingFormInput.value);
  overviewMessage.classList.add("animate-out");
  userName.innerHTML = greetingFormInput.value;

  setTimeout(() => {
    overviewMessage.classList.add("is-hidden");
    welcomeMessage.classList.remove("is-hidden");
  }, 505);

  setTimeout(() => {
    welcomeMessage.classList.add("animate-in");
  }, 600);
}

function checkIfUserExists() {
  if (userFirstNameLocalStorage !== null) {
    userName.innerHTML = userFirstNameLocalStorage;

    overviewMessage.classList.add("is-hidden");
    welcomeMessage.classList.remove("is-hidden");
    welcomeMessage.classList.add("animate-in");
  } else {
    overviewMessage.classList.remove("is-hidden");
  }
}

checkIfUserExists();