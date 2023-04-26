
$('.slidebanner.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots:true,
    navText: [
        '<img src="/img/Group 3058.svg" alt="">',
        '<img src="/img/Group 3059.svg" alt="">',
    ],
    responsive: {
        1000: {
            items: 1,
            nav: true,
            nav: false,
        },
        0: {
            items: 1,
            nav: false,
            dots:false
        }
    }
})
$('.outstanding-program__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 3,
    navText: [
        '<img src="/img/Group 3058.svg" alt="">',
        '<img src="/img/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        1000: {
            items: 3,
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
            nav: false,
            dots: false,
        },
        1000: {
            items: 4,
            nav: false,
            dots: false,
        }
    }
})
$('.vmms-notify__right__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    dots: false,
    navText: [
        '<img src="/images/Group 3058.svg" alt="">',
        '<img src="/images/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: true,
            dots: false,
        },
        1000: {
            items: 1,
            nav: true,
            dots: false,
        }
    }
})
$('.country__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 5,
    nav: true,
    dots: false,
    navText: [
        '<img src="/img/Group 3058.svg" alt="">',
        '<img src="/img/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        1000: {
            items: 5,
            nav: true,
            dots: false,
        }
    }
})
$('.news-event__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 24,
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
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            dots: false,
        }
    }
})
$('.pharmaceutical-company__content__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 6,
    nav: true,
    dots: false,
    navText: [
        '<img src="/img/Group 19134.svg" alt="">',
        '<img src="/img/Group 19135.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 2,
            nav: false,
            dots: false,
        },
        1000: {
            items: 6,
            nav: true,
            dots: false,
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
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            dots: false,
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
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            dots: false,
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
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            dots: false,
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



$('.products__slide.owl-carousel').owlCarousel({
    loop: true,
    margin: 24,
    items: 4,
    nav: true,
    navText: [
        '<img class="border border-2 rounded-circle" src="/img/Group 3058.svg" alt="">',
        '<img class="border border-2 rounded-circle" src="/img/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        500: {
            items: 2,
            nav: false,
        },
        600: {
            items: 3,
            nav: false,
        },
        800: {
            items: 4,
            nav: false,
        },
        1000: {
            items: 5,
            nav: true,
        }
    }
})
$('.banner-product.owl-carousel').owlCarousel({
    loop: true,
    margin: 24,
    items: 1,
    nav: true,
    navText: [
        '<img class="border border-2 rounded-circle" src="/img/Group 3058.svg" alt="">',
        '<img class="border border-2 rounded-circle" src="/img/Group 3059.svg" alt="">',
    ],
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        600: {
            items: 1,
            nav: true,
        },
        1000: {
            items: 1,
            nav: true,
        }
    }
})


