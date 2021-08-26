@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div style="position:relative">

        <div class="page-navigation__wrap">

            <div class="page-navigation">

                <button class="page-navigation__button page-navigation__button--active">
                    <span class="ckeditor" id="about_editor1" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor1')
                    </span>
                </button>
                <button class="page-navigation__button">
                    <span class="ckeditor" id="about_editor2" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor2')
                    </span>
                </button>
                <button class="page-navigation__button">
                    <span class="ckeditor" id="about_editor3" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor3')
                    </span>
                </button>
                <button class="page-navigation__button">
                    <span class="ckeditor" id="about_editor4" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor4')
                    </span>
                </button>
                <button class="page-navigation__button">
                    <span class="ckeditor" id="about_editor5" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor5')
                    </span>
                </button>
                <button class="page-navigation__button">
                    <span class="ckeditor" id="about_editor6" data-dir="about"
                          @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor6')
                    </span>
                </button>
            </div></div>
        <div style="position:relative">
            <img class="page-description__background" src="./assets/img/backgrounds/about-factory.png" alt="">
            <div id="regular-page" class="content-container content-container--regular ">

                <nav class="site-navigation">
                    <nav class="mg-bt-35">
                        <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                        <span class="nav-pages__slash">/</span>
                        <a class="nav-pages" href="{{ route('about') }}">О заводе</a>
                    </nav>
                </nav>

                <section class="mg-bt-50">
                    <h1 class="section__title mg-bt-60 ckeditor" id="about_editor7" data-dir="about"
                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.about.about_editor7')
                    </h1>

                    <div class="page-description__text page-description__text--24">
                        <p class="ckeditor" id="about_editor8" data-dir="about"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.about.about_editor8')
                        </p>
                    </div>
                </section>

            </div>

        </div>
        <div class="regular-page">

            <div id="fullpage-no-scroll">

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="page-description__title-1 mg-bt-60 mg-t-70 ckeditor"
                               id="about_editor9" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor9')
                            </p>

                            <div class="time-line">
                                <!-- Left vertical line -->
                                <div class="time-line__line"></div>

                                <!-- The timeline items time-line -->
                                <ul class="time-line__items">
                                    <!-- Each timeline item -->
                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title ckeditor"
                                                 id="about_editor10" data-dir="about"
                                                 @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor10')
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p class="ckeditor" id="about_editor11" data-dir="about"
                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor11')
                                            </p>
                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title ckeditor" id="about_editor12" data-dir="about"
                                                 @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor12')
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p class="ckeditor" id="about_editor13" data-dir="about"
                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor13')
                                            </p>
                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title ckeditor" id="about_editor14" data-dir="about"
                                                 @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor14')
                                            </div>
                                        </div>

                                        <!-- The description -->
                                        <div class="time-line__desc">
                                            <p class="mg-bt-30 ckeditor" id="about_editor15" data-dir="about"
                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor15')
                                            </p>
                                            <div class="achievements">

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers ckeditor"
                                                               id="about_editor16" data-dir="about"
                                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                                @include('content.about.about_editor16')
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular ckeditor"
                                                       id="about_editor17" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor17')
                                                    </p>
                                                </div>

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers ckeditor"
                                                               id="about_editor18" data-dir="about"
                                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                                @include('content.about.about_editor18')
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular ckeditor"
                                                       id="about_editor19" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor19')
                                                    </p>
                                                </div>

                                                <div class="achievements-wrap">
                                                    <div>
                                                        <div class="achievements-items achievements-items--white">
                                                            <p class="achievements-items__numbers ckeditor"
                                                               id="about_editor20" data-dir="about"
                                                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                                @include('content.about.about_editor20')
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="achievements-items__text achievements-items__text--regular ckeditor"
                                                       id="about_editor21" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor21')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="time-line__item">
                                        <!-- The circle and title -->
                                        <div class="time-line__top">
                                            <!-- The circle -->
                                            <div class="time-line__circle">
                                                <div class="time-line__circle-mini"></div>
                                            </div>

                                            <!-- The title -->
                                            <div class="time-line__title ckeditor" id="about_editor22" data-dir="about"
                                                 @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor22')
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="mg-l-70">
                                <p class="section__text mg-bt-50 ckeditor" id="about_editor23" data-dir="about"
                                   @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.about.about_editor23')
                                </p>
                                <p class="section__text section__text-1 ckeditor" id="about_editor24" data-dir="about"
                                   @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.about.about_editor24')
                                </p>
                                <p class="section__text section__text-1 ckeditor" id="about_editor25" data-dir="about"
                                   @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.about.about_editor25')
                                </p>
                                <p class="section__text section__text-1 ckeditor" id="about_editor26" data-dir="about"
                                   @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.about.about_editor26')
                                </p>
                                <p class="section__text section__text-1 ckeditor" id="about_editor27" data-dir="about"
                                   @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                    @include('content.about.about_editor27')
                                </p>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1 ckeditor" id="about_editor28" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor28')
                            </p>

                            <p class="section__text mg-bt-50 ckeditor" id="about_editor29" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor29')
                            </p>

                            <ul class="platform-list">
                                <li class="platform-list__item">
                                    <p class="ckeditor" id="about_editor30" data-dir="about"
                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.about.about_editor30')
                                    </p>
                                </li>
                                <li class="platform-list__item">
                                    <p class="ckeditor" id="about_editor31" data-dir="about"
                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                        @include('content.about.about_editor31')
                                    </p>
                                </li>
                            </ul>

                            <p class="section__text section__text-1 ckeditor" id="about_editor32" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor32')
                            </p>
                            <p class="section__text section__text-1 ckeditor" id="about_editor33" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor33')
                            </p>
                            <div class="cards">
                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--gallery">

                                    <div class="cards-mask cards-mask--gallery">
                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>
                </section>

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1 ckeditor" id="about_editor34" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor34')
                            </p>

                            <div class="cards">

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>

                                <div class="cards-item cards-item--certificats">

                                    <div class="certificats-frame">
                                        <div class="certificats-frame__image"> <img src="./assets/img/icons/certificats-item.svg" alt="">
                                        </div>
                                        <div class="cards-mask cards-mask--certificats">
                                            <img src="./assets/img/icons/zoom.svg" alt="">
                                        </div>
                                    </div>

                                    <div class="cards-mask cards-mask--gallery">

                                        <img src="./assets/img/icons/zoom.svg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                </section>

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1 ckeditor" id="about_editor35" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor35')
                            </p>
                            <div class="advantages">

                                <div class="advantages-box advantages-box--regular">

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 1b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title" id="about_editor36" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor36')
                                            </h2>
                                            <ul class="advantages-item__list ckeditor">
                                                <li class=" ckeditor" id="about_editor37" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor37')
                                                </li>
                                                <li class="ckeditor" id="about_editor38" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor38')
                                                </li>
                                                <li class="ckeditor" id="about_editor39" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor39')
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 2b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title ckeditor" id="about_editor40" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor40')
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li class="ckeditor" id="about_editor41" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor41')
                                                </li>
                                                <li class="ckeditor" id="about_editor42" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor42')
                                                </li>
                                                <li class="ckeditor" id="about_editor43" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor43')
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 3b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title ckeditor" id="about_editor44" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor44')
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li class="ckeditor" id="about_editor45" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor45')
                                                </li>
                                                <li class="ckeditor" id="about_editor46" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor46')
                                                </li>
                                                <li class="ckeditor" id="about_editor47" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor47')
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">

                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 4b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title ckeditor" id="about_editor48" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor48')
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li class="ckeditor" id="about_editor49" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor49')
                                                </li>
                                                <li class="ckeditor" id="about_editor50" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor50')
                                                </li>
                                                <li class="ckeditor" id="about_editor51" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor51')
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">
                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 5b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title ckeditor" id="about_editor52" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor52')
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li class="ckeditor" id="about_editor53" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor53')
                                                </li>
                                                <li class="ckeditor" id="about_editor54" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor54')
                                                </li>
                                                <li class="ckeditor" id="about_editor55" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor55')
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="advantages-item advantages-item--regular">
                                        <div class="advantages-item__logo"><img src="./assets/img/advantages/shield 6b.svg" alt=""></div>

                                        <div class="advantages-box__wrap">
                                            <h2 class="advantages-item__title ckeditor" id="about_editor56" data-dir="about"
                                                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                @include('content.about.about_editor56')
                                            </h2>
                                            <ul class="advantages-item__list">
                                                <li class="ckeditor" id="about_editor57" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor57')
                                                </li>
                                                <li class="ckeditor" id="about_editor58" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor58')
                                                </li>
                                                <li class="ckeditor" id="about_editor59" data-dir="about"
                                                    @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                    @include('content.about.about_editor59')
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1 ckeditor" id="about_editor60" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor60')
                            </p>

                            <div class="clients-box clients-box--regular">
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/1.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/2.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/3.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/4.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/5.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/6.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/7.png" alt="">
                                </div>
                                <div class="clients__item clients__item--regular"><img src="./assets/img/clients/regular/8.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </section>


                <section class="section section--regular fp-auto-height">

                    <div id="regular-page" class="content-container content-container--regular">

                        <div class="content-wrap">
                            <p class="section__title section__title--1 ckeditor" id="about_editor61" data-dir="about"
                               @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                @include('content.about.about_editor61')
                            </p>

                            <div class="review-box">
                                <div class="swiper-container mySwiper-Regular">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor62" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor62')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor63" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor63')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor64" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor64')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor65" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor65')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor66" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor66')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor67" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor67')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor68" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor68')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor69" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor69')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor70" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor70')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor71" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor71')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor72" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor72')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor73" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor73')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor74" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor74')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor75" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor75')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor76" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor76')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor77" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor77')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">

                                            <div class="review-wrap ">
                                                <header class="review-header review-header--regular">
                                                    <h3 class="review-header__title ckeditor" id="about_editor78" data-dir="about"
                                                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor78')
                                                    </h3>
                                                    <a href="#" class="review-header__scan-link">Смотреть скан отзыва</a>
                                                </header>
                                                <div class="review__text">
                                                    <p class="ckeditor" id="about_editor79" data-dir="about"
                                                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                                                        @include('content.about.about_editor79')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="review-next review-next--regular"></button>
                                    <button class="review-prev review-prev--regular"></button>
                                    <div class="swiper-pagination--regular"></div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>

            </div>
        </div>

    </div>
@endsection
