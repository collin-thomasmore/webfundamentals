var date_of_birth = new Date(1991, 3, 16);
// var date2 = new Date("1991-04-16");
// var date3 = new Date("04/16/1991");

date_of_birth.setFullYear(date_of_birth.getFullYear() + 40);

console.log(date_of_birth);
console.log(date_of_birth.getFullYear());
console.log(date_of_birth.getMonth());
console.log(date_of_birth.getDate());

console.log(date_of_birth.getDay());
