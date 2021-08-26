@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')

    <div class="content-container">
        <nav class="site-navigation">
            <a class="nav-pages" href="{{ route('index') }}">Главная</a>
            <span class="nav-pages__slash">/</span>
            <a class="nav-pages" href="{{ route('about') }}">О заводе</a>
        </nav>
    </div>

    <img class="page-description__background" src="./assets/img/backgrounds/about-factory.png" alt="">

    <div class="about-page">
        <div class="content-container">
            <div class="about-page__inner">
                <div class="page-navigation__wrap">

                    <div class="page-navigation">
                        <a class="page-navigation__button page-navigation__button--active" href="#history">
                            <x-editable-component tag="span" class="" dir="about" id="1"/>
                        </a>
                        <a class="page-navigation__button" href="#prod">
                            <x-editable-component tag="span" class="" dir="about" id="2"/>
                        </a>
                        <a class="page-navigation__button" href="#cert">
                            <x-editable-component tag="span" class="" dir="about" id="3"/>
                        </a>
                        <a class="page-navigation__button" href="#advantages">
                            <x-editable-component tag="span" class="" dir="about" id="4"/>
                        </a>
                        <a class="page-navigation__button" href="#clients">
                            <x-editable-component tag="span" class="" dir="about" id="5"/>
                        </a>
                        <a class="page-navigation__button" href="#reviews">
                            <x-editable-component tag="span" class="" dir="about" id="6"/>
                        </a>
                    </div>
                </div>
                <div class="about-page__content">

                    <x-editable-component tag="h1" class="section__title mg-bt-60" dir="about" id="7"/>

                    <div class="page-description__text page-description__text--24">
                        <x-editable-component tag="p" class="" dir="about" id="8"/>
                    </div>

                    <section class="section section--regular fp-auto-height nav-target">
                        <a class="nav-target__anchor" name="history"></a>

                        <x-editable-component tag="p" class="page-description__title-1" dir="about" id="9"/>

                        <div class=" time-line ">
                            <!-- Left vertical line -->
                            <div class="time-line__line "></div>

                            <!-- The timeline items time-line -->
                            <ul class="time-line__items ">
                                <!-- Each timeline item -->
                                <li class="time-line__item ">
                                    <!-- The circle and title -->
                                    <div class="time-line__top ">
                                        <!-- The circle -->
                                        <div class="time-line__circle ">
                                            <div class="time-line__circle-mini "></div>
                                        </div>

                                        <!-- The title -->
                                        <div class="time-line__title ">
                                            <x-editable-component tag="span" class="" dir="about" id="10"/>
                                        </div>
                                    </div>

                                    <!-- The description -->
                                    <div class="time-line__desc ">
                                        <x-editable-component tag="p" class="" dir="about" id="11"/>
                                    </div>
                                </li>

                                <li class="time-line__item ">
                                    <!-- The circle and title -->
                                    <div class="time-line__top ">
                                        <!-- The circle -->
                                        <div class="time-line__circle ">
                                            <div class="time-line__circle-mini "></div>
                                        </div>

                                        <!-- The title -->
                                        <div class="time-line__title ">
                                            <x-editable-component tag="span" class="" dir="about" id="12"/>
                                        </div>
                                    </div>

                                    <!-- The description -->
                                    <div class="time-line__desc ">
                                        <x-editable-component tag="p" class="" dir="about" id="13"/>
                                    </div>
                                </li>

                                <li class="time-line__item ">
                                    <!-- The circle and title -->
                                    <div class="time-line__top ">
                                        <!-- The circle -->
                                        <div class="time-line__circle ">
                                            <div class="time-line__circle-mini "></div>
                                        </div>

                                        <!-- The title -->
                                        <div class="time-line__title ">
                                            <x-editable-component tag="span" class="" dir="about" id="14"/>
                                        </div>
                                    </div>

                                    <!-- The description -->
                                    <div class="time-line__desc ">
                                        <x-editable-component tag="p" class="mg-bt-30" dir="about" id="15"/>
                                        <div class="achievements ">

                                            <div class="achievements-wrap ">
                                                <div>
                                                    <div class="achievements-items achievements-items--white ">
                                                        <x-editable-component tag="p"
                                                                              class="achievements-items__numbers"
                                                                              dir="about" id="16"/>
                                                    </div>
                                                </div>
                                                <x-editable-component tag="p"
                                                                      class="achievements-items__text achievements-items__text--regular"
                                                                      dir="about" id="17"/>
                                            </div>

                                            <div class="achievements-wrap ">
                                                <div>
                                                    <div class="achievements-items achievements-items--white ">
                                                        <x-editable-component tag="p"
                                                                              class="achievements-items__numbers"
                                                                              dir="about" id="18"/>
                                                    </div>
                                                </div>
                                                <x-editable-component tag="p"
                                                                      class="achievements-items__text achievements-items__text--regular"
                                                                      dir="about" id="19"/>
                                            </div>

                                            <div class="achievements-wrap ">
                                                <div>
                                                    <div class="achievements-items achievements-items--white ">
                                                        <x-editable-component tag="p"
                                                                              class="achievements-items__numbers"
                                                                              dir="about" id="20"/>
                                                    </div>
                                                </div>
                                                <x-editable-component tag="p"
                                                                      class="achievements-items__text achievements-items__text--regular"
                                                                      dir="about" id="21"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="time-line__item ">
                                    <!-- The circle and title -->
                                    <div class="time-line__top ">
                                        <!-- The circle -->
                                        <div class="time-line__circle ">
                                            <div class="time-line__circle-mini "></div>
                                        </div>

                                        <!-- The title -->
                                        <div class="time-line__title ">
                                            <x-editable-component tag="span" class="" dir="about" id="22"/>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="mg-l-70 ">
                            <x-editable-component tag="p" class="section__text mg-bt-50" dir="about" id="23"/>
                            <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="24"/>
                            <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="25"/>
                            <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="26"/>
                            <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="27"/>
                        </div>

                    </section>

                    <section class="section section--regular fp-auto-height nav-target ">
                        <a class="nav-target__anchor" name="prod"></a>

                        <x-editable-component tag="p" class="section__title section__title--1" dir="about" id="28"/>

                        <x-editable-component tag="p" class="section__text mg-bt-50" dir="about" id="29"/>

                        <ul class="platform-list ">
                            <li class="platform-list__item "><x-editable-component tag="p" class="" dir="about" id="30"/>
                            </li>
                            <li class="platform-list__item "><x-editable-component tag="p" class="" dir="about" id="31"/>
                            </li>
                        </ul>

                        <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="32"/>
                        <x-editable-component tag="p" class="section__text section__text-1" dir="about" id="33"/>

                        <div class="cards">
                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>
                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>
                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>
                            <!-- в href путь к картинке, тот же что и для img -->
                            <a href="#" data-fancybox="gallery" class="cards-item cards-item--gallery ">

                                <div class="cards-mask cards-mask--gallery ">
                                    <img src="./assets/img/icons/zoom.svg " alt=" ">
                                </div>
                            </a>

                        </div>
                    </section>

                    <section class="section section--regular fp-auto-height nav-target ">
                        <a class="nav-target__anchor" name="cert"></a>

                        <x-editable-component tag="p" class="section__title section__title--1" dir="about" id="34"/>

                        <div class="cards cards--certificates">

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a data-fancybox="certificates" href="./assets/img/icons/certificats-item.svg"
                               class="cards-item cards-item--certificats ">

                                <div class="certificats-frame ">
                                    <div class="certificats-frame__image ">
                                        <img src="./assets/img/icons/certificats-item.svg " alt=" ">
                                        <div class="cards-mask cards-mask--certificats ">
                                            <img src="./assets/img/icons/zoom.svg " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </section>

                    <section class="section section--regular fp-auto-height nav-target ">
                        <a class="nav-target__anchor" name="advantages"></a>

                        <x-editable-component tag="p" class="section__title section__title--1" dir="about" id="35"/>

                        <div class="advantages ">

                            <div class="advantages-box advantages-box--regular ">

                                <div class="advantages-item advantages-item--regular ">

                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 1b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="36"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="37"/>
                                            <x-editable-component tag="li" class="" dir="about" id="38"/>
                                            <x-editable-component tag="li" class="" dir="about" id="39"/>
                                        </ul>
                                    </div>

                                </div>

                                <div class="advantages-item advantages-item--regular ">

                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 2b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="40"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="41"/>
                                            <x-editable-component tag="li" class="" dir="about" id="42"/>
                                            <x-editable-component tag="li" class="" dir="about" id="43"/>
                                        </ul>
                                    </div>

                                </div>

                                <div class="advantages-item advantages-item--regular ">

                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 3b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="44"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="45"/>
                                            <x-editable-component tag="li" class="" dir="about" id="46"/>
                                            <x-editable-component tag="li" class="" dir="about" id="47"/>
                                        </ul>
                                    </div>
                                </div>

                                <div class="advantages-item advantages-item--regular ">

                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 4b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="48"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="49"/>
                                            <x-editable-component tag="li" class="" dir="about" id="50"/>
                                            <x-editable-component tag="li" class="" dir="about" id="51"/>
                                        </ul>
                                    </div>
                                </div>

                                <div class="advantages-item advantages-item--regular ">
                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 5b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="52"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="53"/>
                                            <x-editable-component tag="li" class="" dir="about" id="54"/>
                                            <x-editable-component tag="li" class="" dir="about" id="55"/>
                                        </ul>
                                    </div>
                                </div>

                                <div class="advantages-item advantages-item--regular ">
                                    <div class="advantages-item__logo "><img
                                            src="./assets/img/advantages/shield 6b.svg " alt=" "></div>

                                    <div class="advantages-box__wrap ">
                                        <x-editable-component tag="h2" class="advantages-item__title" dir="about" id="56"/>
                                        <ul class="advantages-item__list ">
                                            <x-editable-component tag="li" class="" dir="about" id="57"/>
                                            <x-editable-component tag="li" class="" dir="about" id="58"/>
                                            <x-editable-component tag="li" class="" dir="about" id="59"/>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="section section--regular fp-auto-height nav-target ">
                        <a class="nav-target__anchor" name="clients"></a>

                        <x-editable-component tag="p" class="section__title section__title--1" dir="about" id="60"/>

                        <div class="clients-box clients-box--regular ">
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/1.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/2.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/3.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/4.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/5.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/6.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/7.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/8.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/1.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/2.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/3.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/4.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/5.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/6.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/7.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/8.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/1.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/2.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/3.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/4.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/5.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/6.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/7.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/8.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/1.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/2.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/3.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/4.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/5.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/6.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/7.png " alt=" ">
                            </div>
                            <div class="clients__item clients__item--regular "><img
                                    src="./assets/img/clients/regular/8.png " alt=" ">
                            </div>
                        </div>
                    </section>

                    <section class="section section--regular fp-auto-height nav-target ">
                        <a class="nav-target__anchor" name="reviews"></a>

                        <x-editable-component tag="p" class="section__title section__title--1" dir="about" id="61"/>

                        <div class="review-box review-box--regular ">
                            <div class="swiper-container mySwiper-Regular ">
                                <div class="swiper-wrapper ">
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="62"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="63"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="64"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="65"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="66"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="67"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="68"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="69"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="70"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="71"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="72"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="73"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="74"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="75"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="76"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="77"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide ">

                                        <div class="review-wrap ">
                                            <header class="review-header review-header--regular ">
                                                <x-editable-component tag="h3" class="review-header__title" dir="about" id="78"/>
                                                <a href="# " data-fancybox class="review-header__scan-link ">Смотреть
                                                    скан отзыва</a>
                                            </header>
                                            <div class="review__text ">
                                                <x-editable-component tag="p" class="" dir="about" id="79"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="review-next review-next--regular "></button>
                                <button class="review-prev review-prev--regular "></button>
                                <div class="swiper-pagination--regular "></div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection
