// Select all buttons with the class
let buttons = document.querySelectorAll(".details-list-btn");

// Loop through the selected buttons and add a click event listener to each
buttons.forEach((button) => {
    button.addEventListener("click", () => {
        //grab the container id using the button id
        var identifier = document.getElementById(`detail-div-id${button.id}`);
        //do the logic to hide and show details
        if (identifier.classList.contains("hidden")) {
            identifier.classList.remove("hidden");
        } else {
            identifier.classList.add("hidden");
        }
    });
});
