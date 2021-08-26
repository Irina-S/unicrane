<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    <meta name="description" content="
    @if(!@is_null($seo->description))
    {{ $seo->description }}
    @endif">
    <meta name="keywords" content="
    @if(!@is_null($seo->keywords))
    {{ $seo->keywords }}
    @endif">

    <title>{{ $seo->title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/reset.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/helpers.min.css') }}" rel="stylesheet">

    <!-- custom assets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>

<body class="regular-page">

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
<div class="container container--regular">
    <header class="header">
        <div class="header__open-menu">
            <div class="header__open-menu-panel">
                <a href="{{ route('index') }}" class="logo"><img src="./assets/img/site-logo-white.svg" alt="logo"></a>
                <div class="header__open-manu-right-part">
                    <div class="dsp-f">
                        <a class="phone phone--regular" href="tel:+74955405053"></a>
                    </div>
                    <div class="header__close-button"></div>
                </div>
            </div>
            <div class="header__open-menu-content">
                <div class="header__open-menu-big-links">
                    <a href="/" class="header__big-link">Мостовые краны</a>
                    <a href="/" class="header__big-link">Кран-балки</a>
                    <a href="/" class="header__big-link">Козловые краны</a>
                    <a href="/" class="header__big-link">Лёгкие козловые краны</a>
                    <a href="/" class="header__big-link">Консольные краны</a>
                    <a href="/" class="header__big-link">Крановые металлоконструкции</a>
                </div>
                <div class="header__open-menu-small-links">
                    <a href="/" class="header__link">Прайс</a>
                    <a href="{{ route('equipment') }}" class="header__link">Оборудование</a>
                    <a href="{{ route('service') }}" class="header__link">Сервис</a>
                    <a href="" class="header__link">Информация</a>
                    <a href="{{ route('about') }}" class="header__link">О заводе</a>
                    <a href="{{ route('contacts') }}" class="header__link">Контакты</a>
                </div>
                <div class="header__open-menu-phone">+7 495 540 50 53</div>
                <button class="header__open-menu-button">оставить заявку</button>
            </div>
        </div>
        <a href="{{ route('index') }}" class="logo"><img src="./assets/img/logo-r.svg" alt="logo"></a>
        <div class="dsp-f">
            <div class="header__content">
                <button class="product-catalog product-catalog--regular">
                    <div class="burger">
                        <div class="burger__lines"></div>
                    </div>
                    <span class="product-catalog__title product-catalog__title--regular">Каталог продукции</span>
                </button>
                <nav class="header-nav">
                    <a class="header-nav__item" href="">Прайс</a>
                    <a class="header-nav__item" href="{{ route('equipment') }}">Оборудование</a>
                    <a class="header-nav__item" href="{{ route('service') }}">Сервис</a>
                    <a class="header-nav__item" href="">Информация</a>
                    <a class="header-nav__item" href="{{ route('about') }}">О заводе</a>
                    <a class="header-nav__item" href="{{ route('contacts') }}">Контакты</a>
                </nav>
                <div class="dsp-f">
                    <a class="phone phone--regular" href="tel:+74955405053"> <span class="phone__text">+7 495 540 50 53</span></a>
                </div>
            </div>
            <button class="leave-request request request--regular">оставить заявку</button>
        </div>
    </header>
</div>


<div class="popup">
    <div class="popup__block" style="max-width: 460px;">
        <div class="popup__close"></div>
        <div class="enter-form__header">
            <p class="recall-popup__title">Оставьте заявку</p>
            <p class="recall-popup__text">и мы вам перезвоним!</p>
        </div>


        <div class="input-fields-popup">

            <div class="input-group">
                <input type="text" required>
                <label>Введите ваше имя</label>
            </div>

            <div class="input-group">
                <input type="number" required>
                <label>Введите ваш телефон</label>
            </div>
        </div>

        <div class="enter-form__button-wrap">
            <button class="button  button--popup mg-bt-40"> <span class="button__text">отправить запрос</span> </button>
            <div>
                <input type="checkbox" class="check__element" id="privacy-policy" name="privacy-policy" value="yes">
                <label for="privacy-policy">
                    <a href="#"><span>Нажимая на кнопку «Получить консультацию», вы соглашаетесь
                      с политикой конфиденциальности</span></a> </label>
            </div>
        </div>

    </div>
</div>

@yield('content')

@section('footer')
    <div class="footer section section-bg-2 section--footer" style="color:white" >

        <div class="dual">

            <img class="men men--regular" src="./assets/img/backgrounds/men.png" alt="">
            <div class="content-container content-container--footer">
                <div class="dual-box">

                    <div class="dual-box__left">
                        <header class="clients__header mg-bt-25">
                            <h2 class="section__title">Завод кранов UNIQ CRANE.
                                С 2011 года производим краны.
                                Качественно, быстро и надёжно.</h2>
                        </header>

                        <div class="about-company" style="   border-bottom: 1px solid rgba(255, 255, 255, 0.2);">

                            <p>UNIQ CRANE — производственная компания с высокими стандартами. Мы предлагаем комплексные решения
                                в области грузоподъёмного оборудования, начиная от разработки проектной документации и заканчивая сдачей
                                кранов в эксплуатацию.</p>

                        </div>

                        <div class="achievements">

                            <div>
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers">7 лет</p>
                                </div>
                                <p class="achievements-items__text">работы</p>
                            </div>

                            <div>
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers">418</p>
                                </div>
                                <p class="achievements-items__text">клиентов</p>
                            </div>

                            <div>
                                <div class="achievements-items">
                                    <p class="achievements-items__numbers">637</p>
                                </div>
                                <p class="achievements-items__text">отгружено кранов</p>
                            </div>
                        </div>

                        <a href="{{ route('about') }}" class="section__link">Подробнее о компании</a>

                    </div>

                    <div class="dual-box__right dual-box__right--footer">

                        <div >
                            <img class="dual__background-right dual__background-right--regular" src="./assets/img/backgrounds/7.png" alt="">
                        </div>


                        <div class="recall-wrap">
                            <div class="recall-wrap-2">
                                <header class="clients__header">
                                    <h2 class="recall__title">Бесплатный выезд
                                        специалиста</h2>
                                </header>

                                <div class="recall">
                                    <p class="recall__text"> Нет времени изучать? Мы сами перезвоним
                                        и проконсультируем по любым вопросам</p>

                                </div>

                                <div class="input-fields-footer">

                                    <div class="input-group">
                                        <input type="text" required>
                                        <label>Введите ваше имя</label>
                                    </div>

                                    <div class="input-group">
                                        <input type="number" required>
                                        <label>Введите ваш телефон</label>
                                    </div>
                                </div>

                                <button class="button mg-bt-40"> <span class="button__text">отправить запрос</span> </button>
                                <div>
                                    <input type="checkbox" class="check__element" id="privacy-policy" name="privacy-policy" value="yes">
                                    <label for="privacy-policy">
                                        <a href="#"><span>Нажимая на кнопку «Получить консультацию», вы соглашаетесь
                      с политикой конфиденциальности</span></a> </label>
                                </div>
                            </div>
                        </div>
                        <div class="footer__bottom--mobile">
                            <div class="copyright">
                                <p>© 2021 «Uniq Crane» Все права защищены</p>
                            </div>
                            <div class="studio">
                                <a href="https://forest-web.ru/" class="dsp-f" target="_blank"><p>Разработка сайта —</p>
                                    <div class="studio__logo"> <img src="./assets/img/Forestweb-tree.svg" alt="forest_web"><img src="./assets/img/Forestweb.svg" alt="forest_web"></div> </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer__bottom footer__bottom--regular">
                    <div class="copyright">
                        <p>© 2021 «Uniq Crane» Все права защищены</p>
                    </div>
                    <div class="studio">
                        <a href="https://forest-web.ru/" class="dsp-f" target="_blank"><p>Разработка сайта —</p>
                            <div class="studio__logo"> <img src="./assets/img/Forestweb-tree.svg" alt="forest_web"><img src="./assets/img/Forestweb.svg" alt="forest_web"></div> </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@show

@if(isset(Auth::user()->is_admin))
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" defer></script>
    <script src="{{ asset('js/ckeditor_scripts/init.js') }}" defer></script>
    <script src="{{ asset('js/ckeditor_scripts/save_content.js') }}" defer></script>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/scrolloverflow.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js" integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
