function changeColor(color) {
    console.log("changeColor to ", color);
    document.body.style.backgroundColor = color;
}

document.querySelectorAll(".js-button")[0].addEventListener("click", changeColor("red"));

document.querySelectorAll(".js-button")[1].addEventListener("click", function() {
    changeColor("green");
});