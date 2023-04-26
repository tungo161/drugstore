
$('.sliderpage.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots:false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        1000: {
            items: 1,
            nav: true,
            dots: false,
        }
    }
})
$('.outstanding-program__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 3,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
            nav: false,
        }
    }
})
$('.vmms-information__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 4,
    nav: true,
    dots: false,
    navText: [
        '<img src="/images/Group 19134.svg" alt="">',
        '<img src="/images/Group 19135.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
})
$('.vmms-notify__right__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        1000: {
            items: 1,
            nav: true,
        }
    }
})
$('.activities__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 2,
            nav: true,
        }
    }
})
$('.news-event__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 3,
    nav: true,
    dots: false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
            nav: true,
        }
    }
})
$('.affiliated-university__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 6,
    nav: true,
    dots: false,
    navText: [
        '<img src="/images/Group 19134.svg" alt="">',
        '<img src="/images/Group 19135.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 2,
            nav: false,
        },
        1000: {
            items: 6,
            nav: true,
        }
    }
})
$('.education-program__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    item: 3,
    dots: false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
            nav: true,
        }
    }
})
$('.department__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    item: 3,
    dots: false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
            nav: true,
        }
    }
})
$('.administrators__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    item: 3,
    dots: false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
            nav: true,
        }
    }
})

$(document).ready(function () {
    $("a.collapse-language").click(function () {
        $('a.collapse-language').removeClass('color-1');
        $(this).addClass('color-1');
    });
});

$(".content__left-content__menu__item.nav-item").click(function () {
    $("#breadcrumb-item-active").empty();
    $("#breadcrumb-item-active").append($(this).text());
});

$('.research-page__content__most-news__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 2,
    nav: true,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        1000: {
            items: 2,
            nav: true,
        },
        0: {
            items: 1,
            nav: true,
            dots: false
        }
    }
})
$('.research-page__second-content__right__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        1000: {
            items: 1,
            nav: true,
        },
        0: {
            items: 1,
            nav: true,
        }
    }
})

