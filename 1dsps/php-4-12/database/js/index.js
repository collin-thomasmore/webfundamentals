var users = document.querySelectorAll(".c-user");

for(var index = 0; index < users.length; index++) {
    users[index].addEventListener("click", function() {
        this.style.backgroundColor = "red";
    });
}