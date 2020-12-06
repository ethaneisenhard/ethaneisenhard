function rgb2hex(rgb) {
  if(rgb === undefined){
    return;
  }
  rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  function hex(x) {
    return ("0" + parseInt(x).toString(16)).slice(-2);
  }
  return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

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
  if (index === 0) {
    colorArrays.pop();
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  } else {
    var lastElement = document.querySelectorAll(".js-split-firstName span")[
      index - 1
    ];
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    if (rgb2hex(lastElement.style.color) !== randomColor) {
      createSpan.style.color = randomColor;
    } else {
      var indexOfRandomColor = colorArrays.indexOf(randomColor);
      colorArrays.splice(indexOfRandomColor, 1);
      randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
      createSpan.style.color = randomColor;
    }
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
  if (index === 0) {
    colorArrays.pop();
    var randomColor =
      colorArrays[Math.floor(Math.random() * colorArrays.length)];
    createSpan.style.color = randomColor;
  } else {
    var lastElement = document.querySelectorAll(".js-split-lastName span")[
      index - 1
    ];
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    if (rgb2hex(lastElement.style.color) !== randomColor) {
      createSpan.style.color = randomColor;
    } else {
      var indexOfRandomColor = colorArrays.indexOf(randomColor);
      colorArrays.splice(indexOfRandomColor, 1);
      randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
      createSpan.style.color = randomColor;
    }
  }
  lastName.appendChild(createSpan);
});

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
  var currentElement = element.target;
  var nextElement = element.target.nextSibling;
  var prevElement = element.target.previousSibling;
  
  if (
    randomColor !== rgb2hex(prevElement?.style.color) &&
    randomColor !== rgb2hex(nextElement?.style.color) &&
    randomColor !== currentElement.style.color
  ) {
    element.target.style.color = randomColor;
  } else {

    var indexOfRandomColorCurrent = colorArrays.indexOf(
      element.target.style.color
    );

    if (prevElement !== null) {
      var indexOfRandomColorPrevCurrent = colorArrays.indexOf(
        rgb2hex(prevElement.style.color)
      );
      colorArrays.splice(indexOfRandomColorPrevCurrent, 1);
    }

    if (nextElement !== null) {
      var indexOfRandomColorNextCurrent = colorArrays.indexOf(
        rgb2hex(nextElement.style.color)
      );
      colorArrays.splice(indexOfRandomColorNextCurrent, 1);
    }
    colorArrays.splice(indexOfRandomColorCurrent, 1);
    randomColor = colorArrays[Math.floor(Math.random() * colorArrays.length)];
    element.target.style.color = randomColor;
  }
};
document.querySelectorAll(".random-color").forEach((element) => {
  element.addEventListener("mouseover", changeColor);
});
