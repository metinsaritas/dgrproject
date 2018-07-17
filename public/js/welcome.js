$(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({alwaysShowClose: false});
    });

    $(document).on("click", "#grup-sirketleri .effect", function () {
        let rotation = $(this).hasClass("right") ? "+=200" : "-=200";
        $("#grup-sirketleri .logo-holder").stop().animate({scrollLeft: rotation}, 300);
    });
});