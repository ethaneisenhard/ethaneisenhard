var navPhotoButtons = document.querySelectorAll("#photos nav button");

navPhotoButtons.forEach(function (item, index) {
  item.addEventListener("click", navButtonClick);
});

function navButtonClick() {
  var dataValue = this.getAttribute("data-value");
  showGallery(dataValue);
}

var animatePortrait = function animatePortraitImages() {
  var allPortraitImages = document.querySelectorAll(".portrait img");

  allPortraitImages.forEach((item, index) => {
    setTimeout(() => {
      item.classList.remove("is-opacity-0");
    }, 100);

    setTimeout(() => {
      item.classList.remove("animate-1");
    }, 150);
  });
}

animatePortrait();

var animateGraduation = function animateGraduationImages() {
    var allGraduationImages = document.querySelectorAll(".graduation img");

    allGraduationImages.forEach((item, index) => {
      setTimeout(() => {
        item.classList.remove("is-opacity-0");
      }, 100);

      setTimeout(() => {
        item.classList.remove("animate-1");
      }, 150);
    });
}

var animateLandscape = function animateLandscapeImages() {
  var allLandscapeImages = document.querySelectorAll(".landscape img");

  allLandscapeImages.forEach((item, index) => {
    setTimeout(() => {
      item.classList.remove("is-opacity-0");
    }, 100);

    setTimeout(() => {
      item.classList.remove("animate-1");
    }, 150);
  });
};

function showGallery(dataValue) {
  var gallerySections = document.querySelectorAll("#photos section");
  var navButtonClicked, navButtonNotClicked;
  gallerySections.forEach(function (item, index) {
    var checkClassList = item.classList.value.includes(dataValue);

    if (checkClassList === true) {

      item.classList.remove("is-hidden");
      navButtonClicked = document.querySelector(
        `#photos nav button[data-value=${item.classList[0]}]`
      );
      // console.log(navButtonClicked)
      navButtonClicked.classList.add("is-active");
      if(dataValue === "portrait"){
        animatePortrait();
      }else if(dataValue === "graduation"){
        animateGraduation();
      }else{
        animateLandscape();
      }
    } else {
      item.classList.add("is-hidden");
      navButtonNotClicked = document.querySelector(
        `#photos nav button[data-value=${item.classList[0]}]`
      );

      if (navButtonNotClicked.classList.value !== "") {
        if (navButtonNotClicked.classList.value.includes("is-active")) {
          navButtonNotClicked.classList.remove("is-active");
        }
      }
    }
  });

}
