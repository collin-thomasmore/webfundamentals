// /*
//     Type numbers
// */
// var number1 = 5;
// var number2 = 10;
// var number3 = 10.5;
// var scientificNumber = 1e3;

// console.log(number1 + number2);
// console.log(typeof number1);
// console.log(typeof number2);
// console.log(typeof number3);
// console.log(scientificNumber);
// console.log(typeof scientificNumber);

// /* 
//     Type strings 
// */ 
// var word1 = "Collin's \"tasty\" goats";
// var word2 = 'Collin\'s Goats';

// var word3 = "Collin loves";
// var word4 = "goats";
// var phrase = word3 + " " + word4;
// console.warn(phrase);

// console.log(word1);
// console.log(word2);
// console.log(typeof word1);
// console.log(typeof word2);

// /*
//     Type boolean
// */
// var isYoung = true;
// var isSexy = false;

// console.log(isYoung);
// console.log(isSexy);
// console.log(typeof isYoung);
// console.log(typeof isSexy);

// /* 
//     Weird javascript behaviour
// */
// var weirdNumber1 = 5;
// var weirdNumber2 = 10;
// var weirdWord1 = "collin";

// var weirdExample1 = weirdNumber1 + weirdNumber2 + weirdWord1;
// console.log(weirdExample1);
// console.log(typeof weirdExample1);

// var weirdExample2 = weirdWord1 + weirdNumber1 + weirdNumber2;
// console.log(weirdExample2);
// console.log(typeof weirdExample2);

/* 
    Array
*/
var basket = ["Apple", "Watermelon", "Orange"];

// apple = 0
// watermelon = 1
// orange = 2

// First item
console.log(basket[0]);
console.log(basket[1]);
console.log(basket[2]);

console.log(basket);
console.log(typeof basket);

/* 
    Objects
*/
var name = "Van der Vorst";
var firstName = "Collin";
var age = 29;

var person = {
    name: "Van der Vorst",
    firstName: "Collin",
    age: 29,
    educationDegree: null,
    isAwesome: true,
    chickens: [
        "Chicken1",
        "Chicken2",
        "Chicken3",
        "Chicken4",
    ]
};

var attributeName = "isAwesome";
console.log(person);
console.log(person[attributeName]);
console.log(person.name);
console.log(person.age);
console.log(typeof person);

var userList = [
    {
        name: "Collin"
    },
    {
        name: "Lisa"
    }
];

console.log(userList[1].name);

var list = [
    [
        "collin",
        "lisa"
    ],
    [
        "pepper",
        "kamiel"
    ],
];

console.log(list);

/*
    Other types
*/
var emptyVariable;
console.log(typeof emptyVariable);

emptyVariable = null;
console.log(typeof emptyVariable);

// alert("Heeeeey");
var age = prompt("What is your age");
console.log("Omg you're so young only " + age + " years, get out of here ");