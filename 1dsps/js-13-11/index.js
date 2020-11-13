// console.log(document);

// document.getElementById(); // gives 1 object
// document.getElementsByClassName(); // list of objects
// document.getElementsByTagName; // list of ovbject
// document.querySelectorAll(); // list of objects

// var button = document.querySelector("#redButton"); // 1gives 1 object

// button.addEventListener("click", function() {
//     document.querySelector("body").style.backgroundColor = "red";
// });

// var buttonGreen = document.querySelector("#greenButton"); // 1gives 1 object

// buttonGreen.addEventListener("click", function() {
//     document.querySelector("body").style.backgroundColor = "green";
// });
function changeBodyColor(color) {
    document.querySelector("body").style.backgroundColor = color;
}

function isWeatherNice() {
    return false;
}

var howIstheWeather = isWeatherNice();

var buttons = document.querySelectorAll(".js-button");

for (var index = 0; index < buttons.length; index++) {
    buttons[index].addEventListener("click", function() {
        changeBodyColor(this.innerHTML);
    });
}

// console.log(window.outerHeight);
// console.log(window.outerWidth);

// window.history.back();

console.log(window.buttons);
console.log(this.buttons);
console.log(buttons);