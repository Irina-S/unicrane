<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css"
          integrity="sha512-RVmrWua3k1yTDEOg4Yzs2bK5+Thh7nM6jrhDq/6/5/Mwa0JbYe4pP4YMK5sqghKz01T3DgrwYc57Jaf1PSurCg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" https://unpkg.com/pageable@latest/dist/pageable.min.css ">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @auth
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endauth
    <link rel="stylesheet" href="{{ asset('assets/styles/reset.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/helpers.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/jquery.fancybox.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/styles/extra.css') }}"/>
    <!-- <link rel="stylesheet" href="./assets/styles/nice-select.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"
      type="text/css"> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- SEO -->
    <meta name="description" content="
    @if(isset($seo->description))
    {{ $seo->description }}
    @endif">
    <meta name="keywords" content="
    @if(isset($seo->keywords))
    {{ $seo->keywords }}
    @endif">
    <title>{{ $seo->title }}</title>
</head>

<body>
@auth
    {{--кнопка сохранить и токен для отравки--}}
    @if(isset(Auth::user()->is_admin))
        <button class="admin-save" id="admin-save">save</button>
    @endif
    <form action="" id="admin-csrf">
        @csrf
    </form>
    <div class="alert-msg" id="admin-msg">
        <p>Изменения сохранены</p>
    </div>
@endauth
<header class="header">
    <a href="{{ url('/') }}" class="logo"><img src="./assets/img/site-logo-white.svg" alt="UNIQ CRANE"></a>
    <div class="header__mob-content mob-menu">
        <div class="header__catalog">
            <button class="product-catalog">
                <span class="burger">
                  <span class="burger__lines"></span>
                </span>
                <span class="product-catalog__title">Каталог продукции</span>
            </button>
            <ul class="catalog-list" id="catalog-list">
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Мостовые краны</a>
                </li>
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Кран-балки</a>
                </li>
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Козловые краны</a>
                </li>
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Лёгкие козловые краны</a>
                </li>
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Консольные краны</a>
                </li>
                <li class="catalog-list__item">
                    <a href="{{ url('/') }}" class="catalog-list__link">Крановые металлоконструкции</a>
                </li>
            </ul>
        </div>

        <nav class="header-nav">
            <a class="header-nav__item" href="#">Прайс</a>
            <a class="header-nav__item" href="{{ route('equipment') }}">Оборудование</a>
            <a class="header-nav__item" href="{{ route('service') }}">Сервис</a>
            <a class="header-nav__item" href="#">Информация</a>
            <a class="header-nav__item" href="{{ route('about') }}">О заводе</a>
            <a class="header-nav__item" href="{{ route('contacts') }}">Контакты</a>
        </nav>

        <a class="phone" href="tel:+74955405053"> <span class="phone__text">+7 495 540 50 53</span></a>

        <a class="leave-request request" href="#request-popup" data-fancybox>оставить заявку</a>
    </div>
    <a class="phone phone_mob" href="tel:+74955405053"></a>
    <button class="mob-menu-btn">
        <span class="burger">
          <span class="burger__lines"></span>
        </span>
    </button>
</header>

<div id="fullpage" class="scroll-container">
    <!-- ПЕРВЫЙ ЭКРАН -->
    <div class="section section-bg-1 ">
        <div class="content-container">
            <div class="tagline">
                <x-editable-component tag="h1" class="tagline__title title-one" id="1" />
                <a href="#" class="button button--inline">Смотреть каталог</a>
            </div>
        </div>
    </div>

    <!-- ВИДЫ КРАНОВ -->
    <div id="crane-switcher" class="section section-bg-2 ">
        <div class="switch-catalog">
            <ul class="switch-catalog__list crane-list">
                <li class="list-item list-item--6 list-item--active">
                    <x-editable-component tag="p" class="list-item__text" id="2" />
                </li>
                <li class="list-item list-item--6">
                    <x-editable-component tag="p" class="list-item__text" id="3" />
                </li>
                <li class="list-item list-item--6">
                    <x-editable-component tag="p" class="list-item__text" id="4" />
                </li>
                <li class="list-item list-item--6">
                    <x-editable-component tag="p" class="list-item__text" id="5" />
                </li>
                <li class="list-item list-item--6">
                    <x-editable-component tag="p" class="list-item__text" id="6" />
                </li>
                <li class="list-item list-item--6">
                    <x-editable-component tag="p" class="list-item__text" id="7" />
                </li>
            </ul>
            <ul class="switch-catalog__description switch-catalog__description--cranes">
                <li class="description-item description-item--active">
                    <img class="description-item__img" src="./assets/img/type-of-crane/1.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="8" />
                    <x-editable-component tag="p" class="description-item__price" id="9" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
                <li class="description-item">
                    <img class="description-item__img" src="./assets/img/type-of-crane/2.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="10" />
                    <x-editable-component tag="p" class="description-item__price" id="11" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
                <li class="description-item">
                    <img class="description-item__img" src="./assets/img/type-of-crane/3.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="12" />
                    <x-editable-component tag="p" class="description-item__price" id="13" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
                <li class="description-item">
                    <img class="description-item__img description-item__img--bottom"
                         src="./assets/img/type-of-crane/4.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="14" />
                    <x-editable-component tag="p" class="description-item__price" id="15" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
                <li class="description-item">
                    <img class="description-item__img  description-item__img--bottom"
                         src="./assets/img/type-of-crane/5.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="16" />
                    <x-editable-component tag="p" class="description-item__price" id="17" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
                <li class="description-item">
                    <img class="description-item__img" src="./assets/img/type-of-crane/6.png" alt="">
                    <x-editable-component tag="p" class="description-item__title" id="18" />
                    <x-editable-component tag="p" class="description-item__price" id="19" />
                    <a class="button"> <span class="button__text">УЗНАТЬ ПОДРОБНЕЕ</span> </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ПРЕИМУЩЕСТВА -->
    <div class="section section-bg-3 test ">
        <div class="advantages">
            <div class="content-container">
                <div class="mg-bt-35">
                    <x-editable-component tag="h2" class="section__title" id="26" />
                </div>
                <div class="advantages-box">
                    <div class="advantages-item">

                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-1.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="27" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="28" />
                                <x-editable-component tag="li" class="" id="29" />
                                <x-editable-component tag="li" class="" id="30" />
                            </ul>
                        </div>

                    </div>

                    <div class="advantages-item">

                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-2.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="31" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="32" />
                                <x-editable-component tag="li" class="" id="33" />
                                <x-editable-component tag="li" class="" id="34" />
                            </ul>
                        </div>

                    </div>

                    <div class="advantages-item">

                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-3.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="35" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="36" />
                                <x-editable-component tag="li" class="" id="37" />
                                <x-editable-component tag="li" class="" id="38" />
                            </ul>
                        </div>
                    </div>

                    <div class="advantages-item">

                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-4.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="39" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="40" />
                                <x-editable-component tag="li" class="" id="41" />
                                <x-editable-component tag="li" class="" id="42" />
                            </ul>
                        </div>
                    </div>

                    <div class="advantages-item">
                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-5.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="43" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="44" />
                                <x-editable-component tag="li" class="" id="45" />
                                <x-editable-component tag="li" class="" id="46" />
                            </ul>
                        </div>
                    </div>

                    <div class="advantages-item">
                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield-6.svg" alt=""></div>

                        <div class="advantages-box__wrap">
                            <x-editable-component tag="h2" class="advantages-item__title" id="47" />
                            <ul class="advantages-item__list">
                                <x-editable-component tag="li" class="" id="48" />
                                <x-editable-component tag="li" class="" id="49" />
                                <x-editable-component tag="li" class="" id="50" />
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ЕДИНЫЙ ПОСТАВЩИК КРАНОВОГО ОБОРУДОВАНИЯ -->
    <div class="section section-bg-2 ">

        <div class="dual-background-desk">
            <img class="dual__background-right" src="./assets/img/backgrounds/3.jpg" alt="">
        </div>

        <div class="dual">
            <div class="content-container">
                <div class="dual-box">

                    <div class="services-description">
                        <x-editable-component tag="h2" class="section__title" id="51" />
                        <x-editable-component tag="p" class="services-description__text" id="52" />
                        <button class="button"><span class="button__text">СМОТРЕТЬ КАТАЛОГ</span></button>
                    </div>

                    <div class="services-list">
                        <ul class="services-list-wrap">
                            <li class="services-list-item"><span class="services-list-item__number">01</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="53" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">02</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="54" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">03</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="55" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">04</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="56" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">05</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="57" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">06</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="58" />
                            </li>
                            <li class="services-list-item"><span class="services-list-item__number">07</span>
                                <x-editable-component tag="p" class="services-list-item__text" id="59" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- КЛИЕНТЫ/ОТЗЫВЫ -->
    <div class="section section-bg-2 ">

        <div class="dual">
            <div class="content-container content-container--clients">
                <div class="dual-box dual-box--review">

                    <div class="dual-box__left">
                        <div>
                            <img class="dual__background-left" src="./assets/img/backgrounds/4.jpg" alt="">
                        </div>
                        <header class="clients__header">
                            <x-editable-component tag="h2" class="section__title" id="60" />
                            <a href="#" class="section__link">Все клиенты</a>
                        </header>

                        <div class="clients-box">
                            <div class="clients__item"><img src="./assets/img/clients/6.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/2.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/3.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/4.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/5.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/6.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/7.svg" alt=""></div>
                            <div class="clients__item"><img src="./assets/img/clients/3.svg" alt=""></div>
                        </div>
                    </div>

                    <div class="dual-box__right">

                        <header class="clients__header reviews__header">
                            <x-editable-component tag="h2" class="section__title" id="61" />
                            <a href="#" class="section__link">Все отзывы</a>
                        </header>

                        <div class="review-box">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="62" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="63" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="64" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="65" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="66" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="67" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="68" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="69" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="70" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="71" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="72" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="73" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="74" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="75" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="76" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="77" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="review-wrap">
                                            <header class="review-header">
                                                <x-editable-component tag="h3" class="review-header__title" id="78" />
                                                <!-- в href нужно втавить ссылку на скан отзыва -->
                                                <a href="#" class="review-header__scan-link" data-fancybox="reviews">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text">
                                                <x-editable-component tag="p" class="" id="79" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="review-next"></button>
                                <button class="review-prev"></button>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- О КОМПАНИИ / НОВОСТИ -->
    <div class="section section-bg-2 ">
        <div class="dual">
            <div class="content-container">
                <div class="dual-box">

                    <div class="dual-box__left">
                        <header class="clients__header mg-bt-25">
                            <x-editable-component tag="h2" class="section__title" id="80" />
                            <a href="#" class="section__link">Подробнее</a>
                        </header>

                        <div class="about-company">

                            <x-editable-component tag="p" class="" id="81" />

                            <x-editable-component tag="p" class="" id="82" />

                        </div>

                        <div class="direction-company">
                            <x-editable-component tag="p" class="direction-company__title" id="83" />

                            <ul>
                                <x-editable-component tag="li" class="direction-company__item" id="84" />
                                <x-editable-component tag="li" class="direction-company__item" id="85" />
                                <x-editable-component tag="li" class="direction-company__item" id="86" />
                                <x-editable-component tag="li" class="direction-company__item" id="87" />
                                <x-editable-component tag="li" class="direction-company__item" id="88" />
                                <x-editable-component tag="li" class="direction-company__item" id="89" />
                            </ul>
                        </div>

                    </div>

                    <div class="dual-box__right dual-box__right--news">

                        <div>
                            <img class="dual__background-right dual__background-right--news"
                                 src="./assets/img/backgrounds/5.jpg" alt="">
                        </div>

                        <header class="clients__header clients__header--news">
                            <x-editable-component tag="h2" class="section__title" id="90" />
                            <a href="#" class="section__link">Все новости</a>
                        </header>

                        <div class="news">
                            <div class="news-item">
                                <x-editable-component tag="p" class="news-item__data" id="91" />
                                <x-editable-component tag="a" class="news-item__text" id="92" href="#" />
                            </div>
                            <div class="news-item">
                                <x-editable-component tag="p" class="news-item__data" id="93" />
                                <x-editable-component tag="a" class="news-item__text" id="94" href="#" />
                            </div>
                            <div class="news-item">
                                <x-editable-component tag="p" class="news-item__data" id="95" />
                                <x-editable-component tag="a" class="news-item__text" id="96" href="#" />
                            </div>
                            <div class="news-item">
                                <x-editable-component tag="p" class="news-item__data" id="97" />
                                <x-editable-component tag="a" class="news-item__text" id="98" href="#" />
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- УСЛУГИ  -->
    <div id="services" class="section section-bg-2 ">

        <div class="services-wrap">
            <div class="content-container">
                <header class="clients__header clients__header--news">
                    <x-editable-component tag="h2" class="section__title" id="99" />
                </header>
            </div>
        </div>

        <div class="switch-catalog">
            <ul class="switch-catalog__list service-list">
                <li class="list-item list-item--active list-item--5">
                    <x-editable-component tag="p" class="list-item__text" id="100" />
                    <div class="description-item">
                        <img class="description-item__img description-item__img--service"
                             src="./assets/img/backgrounds/services/1.png" alt="">
                        <x-editable-component tag="p" class="description-item__text" id="233" />
                        <button class="button"><span class="button__text">Оставить заявку</span></button>
                    </div>
                </li>
                <li class="list-item list-item--5">
                    <x-editable-component tag="p" class="list-item__text" id="101" />
                    <div class="description-item">
                        <img class="description-item__img description-item__img--service"
                             src="./assets/img/backgrounds/services/2.png" alt="">
                        <x-editable-component tag="p" class="description-item__text" id="102" />
                        <button class="button"><span class="button__text">Оставить заявку</span></button>
                    </div>
                </li>
                <li class="list-item list-item--5">
                    <x-editable-component tag="p" class="list-item__text" id="103" />
                    <div class="description-item">
                        <img class="description-item__img description-item__img--service"
                             src="./assets/img/backgrounds/services/3.png" alt="">
                        <x-editable-component tag="p" class="description-item__text" id="104" />
                        <button class="button"><span class="button__text">Оставить заявку</span></button>
                    </div>
                </li>
                <li class="list-item list-item--5">
                    <x-editable-component tag="p" class="list-item__text" id="105" />
                    <div class="description-item">
                        <img class="description-item__img description-item__img--service"
                             src="./assets/img/backgrounds/services/4.png" alt="">
                        <x-editable-component tag="p" class="description-item__text" id="106" />
                        <button class="button"><span class="button__text">Оставить заявку</span></button>
                    </div>
                </li>
                <li class="list-item list-item--5">
                    <x-editable-component tag="p" class="list-item__text" id="107" />
                    <div class="description-item">
                        <img class="description-item__img description-item__img--service"
                             src="./assets/img/backgrounds/services/5.png" alt="">
                        <x-editable-component tag="p" class="description-item__text" id="108" />
                        <button class="button"><span class="button__text">Оставить заявку</span></button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- ГЕОГРАФИЯ -->
    <div class="section section-bg-2 fp-auto-height-responsive ">

        <div class="geography">

            <div>
                <img class="geography-map" src="./assets/img/backgrounds/6.jpg" alt="">
            </div>

            <div class="content-container content-container--geo">

                <header class="geography__header">
                    <x-editable-component tag="h2" class="section__title" id="119" />
                </header>

                <div class="geography-box">

                    <div class="country">
                        <div class="country-item">
                            <x-editable-component tag="h3" class="country__name" id="168"  data-city-list="city-list-1" />

                            <ul class="city-list city-list-1 city-list--first">
                                <x-editable-component tag="li" class="country__city" id="169" />
                                <x-editable-component tag="li" class="country__city" id="170" />
                                <x-editable-component tag="li" class="country__city" id="171" />
                                <x-editable-component tag="li" class="country__city" id="172" />
                                <x-editable-component tag="li" class="country__city" id="173" />
                                <x-editable-component tag="li" class="country__city" id="174" />
                                <x-editable-component tag="li" class="country__city" id="175" />
                                <x-editable-component tag="li" class="country__city" id="176" />
                                <x-editable-component tag="li" class="country__city" id="177" />
                                <x-editable-component tag="li" class="country__city" id="178" />
                                <x-editable-component tag="li" class="country__city" id="179" />
                                <x-editable-component tag="li" class="country__city" id="180" />
                                <x-editable-component tag="li" class="country__city" id="181" />
                                <x-editable-component tag="li" class="country__city" id="182" />
                                <x-editable-component tag="li" class="country__city" id="183" />
                                <x-editable-component tag="li" class="country__city" id="184" />
                                <x-editable-component tag="li" class="country__city" id="185" />
                            </ul>
                        </div>
                    </div>


                    <div class="country">
                        <div class="country-item">
                            <x-editable-component tag="h3" class="country__name country__name--double" id="186" />

                            <ul class="city-list city-list-1 city-list--last">
                                <x-editable-component tag="li" class="country__city" id="187" />
                                <x-editable-component tag="li" class="country__city" id="188" />
                                <x-editable-component tag="li" class="country__city" id="189" />
                                <x-editable-component tag="li" class="country__city" id="190" />
                                <x-editable-component tag="li" class="country__city" id="191" />
                                <x-editable-component tag="li" class="country__city" id="192" />
                                <x-editable-component tag="li" class="country__city" id="193" />
                                <x-editable-component tag="li" class="country__city" id="194" />
                                <x-editable-component tag="li" class="country__city" id="195" />
                                <x-editable-component tag="li" class="country__city" id="196" />
                            </ul>
                        </div>
                        <div class="country-item">
                            <x-editable-component tag="h3" class="country__name" id="197" data-city-list="city-list-2" />

                            <ul class="city-list city-list-2 city-list--first city-list--last">
                                <x-editable-component tag="li" class="country__city" id="198" />
                            </ul>

                        </div>
                    </div>

                    <div class="country">
                        <div class="country-item">
                            <x-editable-component tag="h3" class="country__name" id="199" data-city-list="city-list-3" />

                            <ul class="city-list city-list-3 city-list--first city-list--last">
                                <x-editable-component tag="li" class="country__city" id="200" />
                                <x-editable-component tag="li" class="country__city" id="201" />
                                <x-editable-component tag="li" class="country__city" id="202" />
                                <x-editable-component tag="li" class="country__city" id="203" />
                                <x-editable-component tag="li" class="country__city" id="204" />
                                <x-editable-component tag="li" class="country__city" id="205" />
                                <x-editable-component tag="li" class="country__city" id="206" />
                            </ul>
                        </div>
                        <div class="country-item">
                            <x-editable-component tag="h3" class="country__name" id="207" data-city-list="city-list-4" />

                            <ul class="city-list city-list-4 city-list--first city-list--last">
                                <x-editable-component tag="li" class="country__city" id="208" />
                                <x-editable-component tag="li" class="country__city" id="209" />
                                <x-editable-component tag="li" class="country__city" id="210" />
                                <x-editable-component tag="li" class="country__city" id="211" />
                                <x-editable-component tag="li" class="country__city" id="212" />
                                <x-editable-component tag="li" class="country__city" id="213" />
                                <x-editable-component tag="li" class="country__city" id="214" />
                                <x-editable-component tag="li" class="country__city" id="215" />
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- ПОДВАЛ -->
    <x-footer />

</div>

<x-popup-request />

<script type="text/javascript" src="{{ asset('assets/js/scrolloverflow.min.js') }}"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js"
        integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
@if(isset(Auth::user()->is_admin))
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('js/ckeditor_scripts/init.js') }}"></script>
    <script src="{{ asset('js/ckeditor_scripts/save_content.js') }}"></script>
@endif
</body>

</html>
