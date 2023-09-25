// // //hide all menu details
// let isBtnVisible =
//     $(".details-list-btn-mobile").css("display") == "none" ? false : true;

// if (isBtnVisible) {
//     console.log("its!");
// } else {
//     console.log("It's not!");
// }
const mediaQuery = window.matchMedia("(min-width: 1000px)");

function showDetails() {}

function handleMediaQueryChange(mediaQuery) {
    if (!mediaQuery.matches) {
        $(".details-menu-expanded").hide();

        $(".details-list-btn-mobile").on("click", function () {
            let selectedDiv = $(`#details-menu${$(this).attr("id")}`);

            if (selectedDiv.attr("style")) {
                selectedDiv.show();
            } else {
                selectedDiv.hide();
            }
        });
    } else {
    }
}

//adding an event handler for every button with a class selector
handleMediaQueryChange(mediaQuery);

// Add a listener for changes in the media query
mediaQuery.addListener(handleMediaQueryChange);
