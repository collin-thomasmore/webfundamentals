/*
    By tagname <h1></h1> <h2></h2> ..
    document.getElementsByTagName() -> all the tags name of our website
    return an array with dom elements in it
*/
// var heading1 = document.getElementsByTagName("h1")[0];
// heading1.style.backgroundColor = "red";

/*
    By id <h1 id="heading1"></h1> <h2 id="heading2"></h2>
    document.getElementById("heading1")
    return a dom element
*/
// var heading1 = document.getElementById("heading1");
// heading1.style.backgroundColor = "red";

/* 
    By classes <h1 class="heading2"></h1> <h2 class="heading2"></h2>
    document.getElementsByClassName("heading2")
    return an array with dom elements in it
*/

// document.getElementsByClassName("heading2")[1].style.backgroundColor = "red";

/*
    document.querySelector("") => return me 1 node/dom element
    document.querySelectorAll("") => return me collection of dom elements
*/

// console.log(document.querySelector("#heading1"));
// console.log(document.querySelector("h1"));
// console.log(document.querySelector(".heading2"));
// console.log(document.querySelectorAll(".heading2")[0]);
// console.log(document.getElementsByClassName("heading2")[0]);
// console.log(document.getElementsByTagName("h1"));
// document.querySelectorAll("")

// console.log(document.querySelector("#navigation").children[0].children);
// console.log(document.querySelectorAll("#navigation ul li"));

// console.log(document.querySelector("#heading1"));
// console.log(document.getElementById("heading1"));

// var heading1 = document.querySelector("#heading1");
// heading1.innerHTML = "OMG <span>the dom</span> is amazing";

// heading1.setAttribute("class", "heading-green");
// heading1.classList.add("heading-green");

// heading1.setAttribute("required", "required");

// heading1.setAttribute("collin-attribute", "collin-value");

// console.log(heading1.classList);

// var footer = document.createElement("h3");
// footer.innerHTML = "Copyrighted by my";

// document.getElementById("footer").append(footer);
// document.getElementById("footer").prepend(footer);
// document.getElementById("footer").before(footer);
// console.log(document.getElementById("footer"));
// console.log(footer);

var footer = document.getElementById("footer");
document.body.removeChild(footer);