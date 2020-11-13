var date = new Date(1991, 3, 16);
// // var dateOfBirth = new Date("1991-04-16");
// // var americanDateOfBirth = new Date("04/16/1991");

// console.log(typeof date);
// console.log(date);
// console.log(date.getFullYear());
// console.log(date.getDate()); // dag van de datum terug
// console.log(date.getMonth() + 1);
// console.log(date.getDay()); // day of the week sunday is 0, monday is 1, tuesday is 2

date.setFullYear(date.getFullYear() + 30);

console.log(date);