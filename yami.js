/* -------- Appears Menu ------ */
$(window).on('ready , scroll', function() {
    if ($(window).scrollTop() > 30) {
        $('.main-menu').addClass('minified');
    } else {
        $('.main-menu').removeClass('minified');
    }
});

/* ---------- Hide Menu-------- */
jQuery(".nav a").on("click", function () {
  jQuery("#nav-menu").removeClass("in").addClass("collapse");
});

/* --------- One Page Navigation -------- */
$('#collapsingNavbar').onePageNav({
    currentClass: 'active',
    scrollSpeed: 500,
    easing: 'linear'
});
