var button = document.querySelector("#button");

var date2 = new Date(prompt("give date"));
console.log(date2);

button.addEventListener("click", function() {
    var dob = new Date(document.querySelector("#dob").value);
    console.log(dob);

});
console.log(button);