var number1 = 12;
var number2 = 12;
var word1 = "collin";
var word2 = "collin ";
/*
    === equal to (value and type)
    == equal to (only value)
    !== not equal to (value and type)
    != not equal to (only value)
    > greater then
    >= greater then, and equal
    < smaller then
    <= smaller and equal
    || or statement (1 conditie moet voldaan worden, kijkt bij alletwee op true)
    && and statement (alle condities moeten voldaan worden, kijkt bij alletwee op true)
*/

if (
    (number1 === number2) // true
    ||
    (number1 > 5) // true
) {
    // Als het waar is
    if (number1 == 10) {
        console.log("So trueee");
    } else {
        console.log("niet gelijk aan 10 helaas")
    }
} else {
    // Als het niet waar is
    console.log("Fake news, not true!");
}

// moogt ge alchohol drinken
var age = parseInt(prompt("Give me your age"));

switch(age) {
    case 18:
        console.log("Ge moogt alles drinken");
        break;
    case 16:
        console.log("Ge moogt bier drinken kleiner dan 5%");
        break;
    default:
        console.log("Te jong sorry")
}