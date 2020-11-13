// Declaring variables
var basket = ["orange", "apple", "pear", "banana"];

// var fruit = prompt("Give me a fruit");
// basket.push(fruit);
// basket.unshift(fruit);
// console.log(basket);

// basket.splice(1, 2);

basket.splice(1, 0, "watermelon");

basket = basket.sort();

// Looping in a colors
for (var index = 0; index < basket.length; index++) {
    console.log(basket[index]);
}

// console.log(fruits);
// console.log(typeof fruits);

// console.log(fruits.toString());
// console.log(typeof fruits.toString());
// console.log(fruits.join("/"));

var numbers = [5, 60, 3, 10];
console.log(numbers.sort(function(a, b) {
    return a - b;
}));