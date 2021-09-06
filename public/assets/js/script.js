$(document).ready(function() {
    const body = document.body;

    const header = document.querySelector('.header');

    const pageUpbutt = document.createElement('button');

    const burgerButton = document.querySelector('.product-catalog');

    const catalogList = document.querySelector('.catalog-list');

    const mobMenuBtn = document.querySelector('.mob-menu-btn');

    // РАСКРЫТИЕ КАТАЛОГА

    burgerButton.addEventListener('click', function() {
        catalogList.classList.toggle('catalog-list_opened');
    });

    //------------------------------------------------

    // РАСКРЫТИЕ МОБИЛЬНОГО МЕНЮ

    mobMenuBtn.addEventListener('click', function() {
        header.classList.toggle('header_opened');
        body.classList.toggle('overflow-hd');
    });

    let fullPage = document.getElementById('fullpage');

    //ПОЭКРАННЫЙ СКРОЛЛ

    if (fullPage) {
        new fullpage(fullPage, {
            responsiveWidth: 1230,
            navigation: true,
            navigationPosition: 'right',
            //autoScrolling: true,
            scrollOverflow: true,
            fitToSection: false,
            touchSensitivity: 100,
            bigSectionsDestination: 'top',

            onLeave: function(section, origin, destination, direction) {
                var loadedSlide = this;

                let scroller = document.querySelectorAll('.fp-scroller');

                scroller.forEach((item, index) => {
                    item.style.transform = "translate(0px, 0px) translateZ(0px)";
                })


                let activeSlide = document.querySelector('.pagination-page--active');
                activeSlide.innerHTML = origin.index + 1;
            }
        });
    }

    const nav = document.querySelector('.fp-right');

    if (nav) {
        pageUpbutt.className = "page-up";
        pageUpbutt.innerHTML = "НАВЕРХ";

        let paginationPage = document.createElement('div');
        paginationPage.className = "pagination-page";
        paginationPage.innerHTML = "<span class=\"pagination-page--active\">1</span><span class=pagination-page--all>/9</span> ";
        nav.append(paginationPage)
        nav.append(pageUpbutt)


        let pageUp = document.querySelector('.page-up');
        pageUp.addEventListener('click', function(e) {
            fullpage_api.moveTo(1);
        });

    }

    //------------------------------------------------

    // ОТКРЫТИЕ ФОРМЫ ЗАЯВКИ И ПРОСМОТР СКАНОВ ОТЗЫВОВ, ГАЛЕРЕЯ ИТП

    try {
        $('[data-fancybox]').fancybox();
    } catch (e) {}



    //------------------------------------------------

    // ПЕРЕКЛЮЧЕНИЕ КРАНОВ

    function dualSwitcher(switcherCategory) {

        if (switcherCategory) {
            let catalog = switcherCategory.querySelectorAll('.list-item');
            let description = switcherCategory.querySelectorAll('.description-item');
            catalog.forEach((item, index) => {

                item.addEventListener('click', () => {

                    catalog.forEach((item, index) => {
                        item.classList.remove('list-item--active')
                    })

                    item.classList.add('list-item--active')

                    description.forEach((item) => {
                        item.classList.remove('description-item--active')
                    })
                    description[index].classList.add('description-item--active')
                })
            })
        }

    }

    dualSwitcher(document.querySelector("#crane-switcher"));

    //------------------------------------------------

    // ПЕРЕКЛЮЧЕНИЕ УСЛУГ

    $('.service-list').click(function(e) {
        const $item = $(e.target).closest('.list-item');

        if ($(window).innerWidth() >= 991) {
            $(this).find('.list-item').removeClass('list-item--active');
            $item.addClass('list-item--active');
        } else if ($item.hasClass('list-item--active')) {
            $item.removeClass('list-item--active')
        } else {
            $(this).find('.list-item').removeClass('list-item--active');
            $item.addClass('list-item--active');
        }

    });

    //------------------------------------------------

    //СЛАЙДЕР ОТЗЫВОВ


    const swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });


    const swiperRegular = new Swiper(".mySwiper-Regular", {
        pagination: {
            el: ".swiper-pagination--regular",
            type: "fraction",
        }
    });

    function sliderNavigation(nextRevButt, prevRevButt, sw) {

        if (nextRevButt, prevRevButt) {

            nextRevButt.addEventListener('click', () => {
                sw.slideNext();
            })

            prevRevButt.addEventListener('click', () => {
                sw.slidePrev();
            })
        }
    }

    sliderNavigation(document.querySelector('.review-next--regular'), document.querySelector('.review-prev--regular'), swiperRegular)
    sliderNavigation(document.querySelector('.review-next'), document.querySelector('.review-prev'), swiper);

    //------------------------------------------------

    //РАСКРЫТИЕ СПИСКОВ ГОРОДОВ НА МОБИЛКАХ
    $('.geography-box').click(function(e) {
        if ($(window).innerWidth() <= 991) {
            const $item = $(e.target).closest('.country__name');
            const $cityList = $item.data('cityList');
            if ($item.hasClass('country__name--active')) {
                $item.removeClass('country__name--active');
                $(`.${$cityList}`).removeClass('city-list--active');
            } else {
                $(this).find('.country__name--active').removeClass('country__name--active');
                $item.addClass('country__name--active');
                $(`.${$cityList}`).addClass('city-list--active');
            }
        }
    });

    // ДЛЯ СТРАНИЦЫ О КОМПАНИИ

    // ПРОКРУТКА ДО ЯКОРЯ НА НАВИГАЦИИ
    $("body").on('click', '.page-navigation__button', function(e) {
        const name = $(this).attr('href').substr(1);
        const selector = `a[name="${name}"]`;
        const offsetTop = $(selector).offset().top;
        const fixedOffset = 150;
        $('html,body').stop().animate({ scrollTop: offsetTop - fixedOffset }, 1000);
        e.preventDefault();
        return false;
    });

    // НАХОДИТСЯ ЛИ ЭЛЕМЕНТ В ОБЛАСТИ ПРОСМОТРА?
    function isElementInView(elem) {
        const winTop = $(window).scrollTop();
        const winBottom = winTop + $(window).innerHeight();
        const elemTop = $(elem).offset().top;
        if (elemTop > winTop && elemTop < winBottom)
            return true
        else
            return false;
    }

    // ВЫДЕЛЕНИЕ ТЕКУЩЕЙ ПРОСМАТРИВАЕМОЙ СЕКЦИИ В НАВИГАЦИИ
    function setActiveNavItem(name) {
        $('.page-navigation__button').removeClass('page-navigation__button--active');
        $(`.page-navigation__button[href="#${name}"]`).addClass('page-navigation__button--active');
    }

    const $navTargets = $('.nav-target');

    $(window).scroll(function() {
        $navTargets.each(function(index, item) {
            if (isElementInView(item)) {
                const targetName = $(item).find('.nav-target__anchor').attr('name');
                setActiveNavItem(targetName);
                return;
            }
        });
    });

    //------------------------------------------------

    //ТЕМНЫЙ ФОН ДЛЯ ШАПКИ НА ГЛАВНОЙ ПРИ ПРОКРУТКЕ
    $(window).scroll(function() {
        if ($(window).scrollTop() > $('body:not(.regular-page) .header').height())
            $('.header').addClass('header--bg')
        else
            $('.header').removeClass('header--bg');

    });

});