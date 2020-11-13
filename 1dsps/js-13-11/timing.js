function sayHi() {
    console.log("Hello you stanger");
}

var timeout = setTimeout(sayHi, 3000);

// document.querySelector("#stop_saying_hello").addEventListener("click", function() {
//     clearTimeout(timeout);
// });

// Set interval

var interval = setInterval(sayHi, 3000);