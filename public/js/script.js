$(".details-list-btn-mobile").on("click", function () {
    let clickedBtn = $(this);
    let selectedDiv = $(`#details-menu-${clickedBtn.attr("id")}`);
    let taskDesc = $(`#task-${clickedBtn.attr("id")}`);
    if (selectedDiv.hasClass("hidden")) {
        //if button is clicked and details are hidden do this:
        selectedDiv.removeClass("hidden");
        clickedBtn.addClass("clicked-btn");
        taskDesc.removeClass("truncate");
    } else {
        //if button is clicked and details are visible do this:
        selectedDiv.addClass("hidden");
        clickedBtn.removeClass("clicked-btn");
        taskDesc.addClass("truncate");
    }
});
