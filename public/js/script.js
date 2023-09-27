//navbar mobile interaction logic

$("#mobile-toogle-btn").on("click", function () {
    if ($("#navbar-links").hasClass("hidden")) {
        $("#logo").hide();
        $("#navbar-links").removeClass("hidden");
        $("#btn-icon").attr("src", "Icons/mobile-menu-close-button.svg");
    } else {
        $("#logo").show();
        $("#navbar-links").addClass("hidden");
        $("#btn-icon").attr("src", "Icons/mobile-menu-button.svg");
    }
});

//task list mobile interaction logic
$(".details-list-btn-mobile").on("click", function () {
    let clickedBtn = $(this);
    let selectedDiv = $(`#details-menu-${clickedBtn.attr("id")}`);
    let taskDesc = $(`#task-${clickedBtn.attr("id")}`);
    let fixSpan = $(`#fix-span-${clickedBtn.attr("id")}`);

    if (selectedDiv.hasClass("hidden")) {
        //if button is clicked and details are hidden do this:
        selectedDiv.removeClass("hidden");
        clickedBtn.addClass("clicked-btn");
        taskDesc.removeClass("truncate");
        fixSpan.addClass("fix-span-alignment");
    } else {
        //if button is clicked and details are visible do this:
        selectedDiv.addClass("hidden");
        clickedBtn.removeClass("clicked-btn");
        taskDesc.addClass("truncate");
        fixSpan.removeClass("fix-span-alignment");
    }
});
