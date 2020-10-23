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
var float = 10.5;
var scientific = 1e3;
var total = number1 + number2;

console.log(float);
console.log(scientific);
console.log(typeof float);
console.log(typeof scientific);
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

/* Boolean */
var isOld = true;
var isSexy = false;

console.log(isOld);
console.log(isSexy);
console.log(typeof isOld);

/* Object */
var colors = ["orange", "pink", "green", 4];
console.log(colors);
console.log(colors[0]);
console.log(colors[1]);
console.log(colors[2]);
console.log(colors[3]);
console.log(typeof colors);

var person = {
    firstname: "Collin",
    name: "Van der Vorst",
    age: 29,
    hasGoats: true,
    chickens: [
        "Chicken1",
        "Chicken2",
        "Chicken3"
    ]
}

console.log(person);
console.log(person.age + 1);
console.log(typeof person);

var attributeName = "age";
console.warn(person["age"]);
console.warn(person[attributeName]);

var students = [
    {
        name: "Collin"
    },
    {
        name: "Marnix"
    }
];

console.log(students[0].name);

var testArray = [
    [
        1,
        2,
        3
    ],
    [
        4,
        5,
        6
    ]
];
console.log(testArray);

document.write("Oops, something went wrong");
// alert("Popup");
var promptName = prompt("Give me your name, fool");

console.log(promptName);