// function sayHi() {
//     console.log("Hello you stanger");
// }

// var timeout = setTimeout(sayHi, 3000);

// // document.querySelector("#stop_saying_hello").addEventListener("click", function() {
// //     clearTimeout(timeout);
// // });

// // Set interval
var counter = 0;
var interval;

function addSecond() {
    console.log(counter);
    if (counter >= 10) {
        clearInterval(interval);
    } else {
        counter++;
        document.querySelector("#heading1").innerHTML = counter;
    }
}

document.querySelector("#js-start-chronometer").addEventListener("click", function() {
    interval = setInterval(addSecond, 1000);
});

document.querySelector("#js-stop-chronometer").addEventListener("click", function() {
    clearInterval(interval);
});

document.querySelector("#js-reset-chronometer").addEventListener("click", function() {
    counter = 0;
});