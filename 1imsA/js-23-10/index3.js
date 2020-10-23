/*
    for (initiele waarde; is het nog steeds op true; wat hij volgende stap gaat moeten doen)
*/
// for (var i = 0; i < 5; i++) {
//     console.log("step: " + i);
//     console.log(i < 5);
// }

// for (var i = 10; i >= 5; i--) {
//     console.log("step: " + i);
// }

//step < 5  = true 
/*
    for (initiele waarde; is het nog steeds op true; wat hij volgende stap gaat moeten doen)
*/
// var colors = ["orange", "green", "blue"];

// for (var i in colors) {
//     // Matrix => zero based 
//     console.log(i);
//     console.log(colors[i]);
// }

// for (var i = 0; i < colors.length; i++ ) {
//     console.log(i);
//     console.log(colors[i]);
// }

// var person = {
//     lastname: "Van der Vorst",
//     name: "Collin"
// }

// console.log(person.lastname);
// console.log(person.name);
// console.log(person['lastname']);

// for (var attributename in person) {
//     console.log(attributename);
//     console.log(attributename + " is " + person[attributename]);
// }

var answer;

do {
    var answer = prompt("Enter X to stop");
    console.log(answer);
    // javascript
} while (answer != "X")