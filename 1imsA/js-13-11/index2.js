var names = ["zahra", "collin", "corentin"];
// var grades = [5, 10, 8, 10];
// console.log(names.sort());
// console.log(grades.sort(function(a, b) {
//     return a - b;
// }));

console.log(this);

var user = {
    firstname: "Collin",
    name: "Van der Vorst",
    age: 29,
    isHappy: true,
    fiance: {
        firstname: "lisa"
    },
    getFullName: function() {
        return this.firstname + " " + this.name;
    },
    setAge: function(age) {
        this.age = age;
    }
};

var fullname = user.getFullName();
user.setAge(30);
console.log(user);

// for (var attributeName in user) {
//     if (typeof user[attributeName] == "object") {
//         for (var subAttributeName in user[attributeName]) {
//             console.log(user[attributeName][subAttributeName]);
//         }
//     } else {
//         console.log(attributeName + " " + user[attributeName]);
//     }
// }