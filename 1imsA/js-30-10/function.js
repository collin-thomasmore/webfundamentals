var number1 = 4;
var number2 = 8;
var number3 = 12;
var number4 = 16;

function crazyCalculation(a, b) {
    // Ik doe wat met variables a en b 
    var result = (a + b) * 2
    // console.log("crazy calculation");

    // Ik geef resultaat terug
    return result;
}

var result1 = crazyCalculation(number1, number2);
var result2 = crazyCalculation(number1, number3);
var result3 = crazyCalculation(number1, number4);
var result4 = crazyCalculation(number2, number3);

// console.log(result1);
// console.log(result2);
// console.log(result3);
// console.log(result4);


this;

function changeColor(color) {
    document.querySelector("body").style.backgroundColor = color;
}

// document.querySelector("#heading1").addEventListener("click", function() {
//     this.style.backgroundColor = "orange";
//     changeColor("#ededed");
// });

// document.querySelector("#heading2").addEventListener("click", function() {
//     this.style.backgroundColor = "orange";
//     changeColor("green");
// });

console.log(document.querySelectorAll("#colorpicker li"));

var colorItems = document.querySelectorAll("#colorpicker li");



function changeColor(element) {
    element.style.color = element.innerText;
    element.style.backgroundColor = "brown";
}

for (var index = 0; index < colorItems.length; index++ ) {
    colorItems[index].addEventListener("click", function() {
        changeColor(this);
    });
}