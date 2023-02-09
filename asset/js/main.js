
// menu js
function toggleNav() {
    document.querySelector('.navbar').classList.toggle('navbar--open')
}

$(document).ready(function () {

    // button up(arraw)
    $(".btn-up").click(function () {
        $(window).scrollTop(0);
    });

    // active nav link item portfolio
    $('.nav_tabs .tab').click(function () {
        $('.nav_tabs .tab').css('background-color', `transperent`);
        $(this).css('background-color', `var(--mainColor)`);
    });

});
