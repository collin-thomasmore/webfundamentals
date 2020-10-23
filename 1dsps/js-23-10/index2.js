/* 
    == Equal to (value)
    === Equal to (value typeof the variable)
    != Not equal to (value)
    !== Not equal to (value typeof the variable)
    > greater then
    >= greater then or equal
    < smaller then
    <= smaller or equal
    && AND-operator (everything needs to be set on true)
    || OR-operator
*/
// var age = 17;

// if (age >= 16) {
//     // Condition is true
//     console.log("You can drink alcohol");
    
//     if (age >= 18) {
//         console.log("You can drink some whiskey");
//     } else {
//         console.log("Beer will do");
//     }
// } else {
//     // Condition is not true
//     console.log("Sorry you will have to wait");
// }

// var person = {
//     gender: "m",
//     name : "Collin"
// };

// var person2 = {
//     gender: "m",
//     name : "Jan"
// };

// console.log(person);

// if (
//     person2.name == "Collin" // false
//     ||
//     person2.gender == "m" // true
// ) {
//     // true statement
//     console.log("Allright this is Collin");
// } else {
//     // False statement
// }

// var age = prompt("Give me your age, or you will not enter");

// if (age != "") {
//     age = parseInt(age);
//     console.log(age);
//     console.log(typeof age);

//     if (age > 18) {
//         console.log("Welcome!");
//     } else {
//         console.log("Noooooo! not welcome");
//     }
// } else {
//     console.log("Empty");
// }

var fruit = prompt("Give me your favorite fruit");

switch (fruit) {
    case "orange":
        console.log("I do love oranges");
        break;
    case "apple":
        console.log("Too healthy for me");
        break;
    default: 
        console.log("What?");
}
