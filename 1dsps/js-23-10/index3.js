/*
    For loop
*/

// for (var step = 1; step <=5; step+=2) {
//     console.log(step);
// }

// for (var step = 10; step > 0; step--) {
//     console.log(step);
// }

// var users = ["Collin", "Lisa", "Ashton"];

// for (var index in users) {
//     if (users[index] == "Collin") {
//         console.log("this is collin");
//     } else {
//         console.log("someone else");
//     }
// }

// var person = {
//     name: "Van der Vorst",
//     firstname: "Collin",
//     age: 29
// }

// for (var attributename in person) {
//     console.log(attributename + " is " + person[attributename]);
// }

// var users = [
//     {
//         name: "Collin",
//         age: 29
//     },
//     {
//         name: "Frank",
//         age: 16
//     },
// ];

// for (var index in users) {
//     console.log(users[index]);
//     for (var attributename in users[index]) {
//         console.log(attributename + " is " + users[index][attributename]);
//     }
// }

// do {
//     var answer = prompt("Enter X to stop");
// } while (answer != "X")

var users = ["Collin", "Lisa", "Ashton"];

for (var index in users) {
    if (users[index] == "Collin") {
        console.log("this is collin");
    } else {
        console.log("someone else");
    }
}

for (var index = 0; index < users.length; index++) {
    if (users[index] == "Collin") {
        console.log("this is collin");
    } else {
        console.log("someone else");
    }
}