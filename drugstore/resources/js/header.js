

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('#header').addClass('sticky-top');
    } else {
        $('#header').removeClass('sticky-top');
    }
});

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 100) {
        $('#list-example').addClass('sticky-xl-top t-50');
    } else {
        $('#list-example').removeClass('sticky-xl-top t-50');
    }
});
/* $(document).ready(function () {
    $(".menu__item__left__name").click(function () {
        $('.menu__item__left__name').removeClass('active');
        $(this).addClass('active');
    });
}); */
$(document).ready(function () {
    if (window.location.pathname != '/') {
        const activePage = window.location.pathname;
        const navLinks = document.querySelectorAll('.menu__item__left__name').forEach(link => {
            if (link.href.includes(`${activePage}`)) {
                link.classList.add('active');
                console.log(link);
            }
        })
    }
    else{
        $('#homepage').addClass('active');
    }
});

