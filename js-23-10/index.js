// alert("Loaded with external js");
// console.log("Hello my lovely console");
// console.error("this is a warning");

// One line comment 

/*
    Dit is commentaar
    op verschillende lijnen
    blabla
*/

var number1 = 10;
var number2 = 5;
var total = number1 + number2;

console.log(number1);
console.log(number2);
console.log(total);
console.log(typeof total);

/* string */
var firstName = "Collin";
var name = 'Van der Vorst';
var nickname = 'Collin\'s "The webwizard" Van der Vorst';
var fullname = firstName + " " + name;

console.log(firstName);
console.log(name);
console.log(firstName + name);
console.log(typeof firstName);
console.log(nickname);
console.log(fullname);

console.log(number1 + number2 + fullname);
console.log(fullname + number1 + number2);

/* Undefined */
var collin;
console.log(collin);
console.log(typeof collin);