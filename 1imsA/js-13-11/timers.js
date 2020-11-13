function scream() {
    console.log("scream");
}

//  Timeout 
var showPopup = setTimeout(scream, 3000);

// document.querySelector("#js-stop-timeout").addEventListener("click", function() {
//     console.log("geklikt");
//     clearTimeout(showPopup);
// });

setInterval(scream, 1000);