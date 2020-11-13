// function scream() {
//     console.log("scream");
// }

// //  Timeout 
// var showPopup = setTimeout(scream, 3000);

// // document.querySelector("#js-stop-timeout").addEventListener("click", function() {
// //     console.log("geklikt");
// //     clearTimeout(showPopup);
// // });

// setInterval(scream, 1000);

var second= 0;
var chronometer;

function logSecond() {
    if (second < 5) {
        second++;
        document.querySelector("#heading1").innerHTML = second;
    } else {
        clearInterval(chronometer);
    }
}

document.querySelector("#js-start").addEventListener("click", function() {
    chronometer = setInterval(logSecond, 1000);
});

document.querySelector("#js-stop").addEventListener("click", function() {
    clearInterval(chronometer);
});