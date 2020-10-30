// var number1 = 5;
// var number2 = 10;
// var number3 = 15;
// var total = 20;

// function crazyMaths(a, b) {
//     var totalOfCrazyMaths = (a + b) * 2;

//     return totalOfCrazyMaths;
// }

// var assignemt1 = crazyMaths(number1, number2);
// var assignemt2 = crazyMaths(number2, number3);
// var assignemt3 = crazyMaths(number1, number3);

// console.log(assignemt1);
// console.log(assignemt2);
// console.log(assignemt3);

// console.log();

// var changeColorButton = document.querySelector("#changecolor");

// changeColorButton.addEventListener("click", function() {
//     // do something
//     buttonClicked();
// });
// function buttonClicked() {
//     document.querySelector("body").style.backgroundColor = "green";
// }




var colorList = document.querySelector("#colorlist").children;

function changeColor(listitem) {
    listitem.style.color = listitem.innerText;
    listitem.style.backgroundColor = "black";
}

for (var index = 0; index < colorList.length; index++) {
    colorList[index].addEventListener("click", function() {
        changeColor(this);
    });
}