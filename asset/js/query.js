// menu to change icon
let changeIcon = function (icon) {
    icon.classList.toggle('fa-times');
}
changeIcon = (icon) => icon.classList.toggle('fa-times');


// active nav link item
$('.navbar .nav-link').click(function () {
    $('.navbar-nav .nav-link').css('color', `white`);
    $(this).css('color', `var(--mainColor)`);
});
$('.navbar-nav .nav-link').css('color', `white`);


$(window).ready(function () {
    $(".scroll-down-arrow")
        .animate({ bottom: "0" }, 500)
        .fadeOut()
        .animate({ bottom: "30" }, 00)
        .fadeIn();
});

$(function () {
    $(".header_section .info").fadeIn(1000);

    $(window).on("scroll", function () {
        var sc = $(window).scrollTop();
        // console.log(sc);
        if (sc > 3000) {
            $(".btn-up").fadeIn();
        } else {
            $(".btn-up").fadeOut();
        }

        if (sc > 3390) {
            $(".contact-form").fadeIn(500);
            
        }

        if (sc > 390) {
            $(".services").fadeIn(500);
        } else {
            $(".services").fadeOut(500);
        }
    });
});
