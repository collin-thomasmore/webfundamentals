var user = {
    firstname: "Collin",
    name: "Van der Vorst",
    age: 29,
    animals: [
        "chicken",
        "goats",
        "sheep",
        "cats"
    ],
    fiance: {
        firstname: "Lisa",
        name: "Van der Vorst"
    },
    getFullname: function() {
        return this.firstname + " " + this.name;
    },
    setFirstname: function(name) {
        this.firstname = name;
    }
};

user.setFirstname("Tompje");

var fullname = user.getFullname();
console.log(fullname);

// console.log(user.age);
// console.log(user.fiance.firstname)
// console.log(typeof user);

// for (var attributeName in user) {
//     if (typeof user[attributeName] == "object") {
//         for (var subAttributeName in user[attributeName]) {
//             console.log(subAttributeName + " " + user[attributeName][subAttributeName]);
//         }
//     } else {
//         console.log(attributeName + " " + user[attributeName]);
//     }
    
// }

// var user2 = new Object();
// user2.firstname = "Collin";
// user2.age = 29;

// console.log(user2);