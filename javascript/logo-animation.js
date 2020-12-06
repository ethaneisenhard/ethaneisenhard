var firstName = document.querySelector(".js-split-firstName");
var splitFirstName = firstName.getAttribute("aria-label").split("");
splitFirstName.forEach((letter, index) => {

  var colorArrays = [
    "#da4066",
    "#32c07a",
    "#32bee2",
    "#f5925d",
    "#293e6a",
    "#ffcf50",
  ];
  var createSpan = document.createElement("span");
  createSpan.innerHTML = letter;
  createSpan.classList.add("random-color");
  var randomColor;
  if(index === 0){
    colorArrays.pop()
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  }else{
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  }
  firstName.appendChild(createSpan);
});

var lastName = document.querySelector(".js-split-lastName");
var splitLastName = lastName.getAttribute("aria-label").split("");
splitLastName.forEach((letter, index) => {
  var colorArrays = [
    "#da4066",
    "#32c07a",
    "#32bee2",
    "#f5925d",
    "#293e6a",
    "#ffcf50",
  ];
  var createSpan = document.createElement("span");
  createSpan.innerHTML = letter;
  createSpan.classList.add("random-color");
  if(index === 0){
    colorArrays.pop()
    var randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  }else{
    var randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  }
  lastName.appendChild(createSpan);
});

function rgb2hex(rgb) {
  rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  function hex(x) {
    return ("0" + parseInt(x).toString(16)).slice(-2);
  }
  return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

var changeColor = function (element) {
  var colorArrays = [
    "#da4066",
    "#32c07a",
    "#32bee2",
    "#f5925d",
    "#293e6a",
    "#ffcf50",
  ];
  var randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
  if (rgb2hex(element.target.style.color) !== randomColor) {
    element.target.style.color = randomColor;
  } else {
    var indexOfRandomColor = colorArrays.indexOf(randomColor);
    colorArrays.splice(indexOfRandomColor, 1)
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    element.target.style.color = randomColor;
  }
};

document.querySelectorAll(".random-color").forEach((element) => {
  element.addEventListener("mouseover", changeColor);
});
