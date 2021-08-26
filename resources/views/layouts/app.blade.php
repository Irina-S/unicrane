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
    <script src="{{ asset('js/app.js') }}" defer></script>
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

<body class="regular-page">
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
    <a href="{{ url('/') }}" class="logo"><img src="./assets/img/logo-r.svg" alt="UNIQ CRANE"></a>
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

@yield('content')

@section('footer')
    <div class="footer section section-bg-2 section--footer " style="color:white ">

        <div class="dual ">

            <img class="men men--regular " src="./assets/img/backgrounds/men.png " alt=" ">
            <div class="content-container content-container--footer ">
                <div class="dual-box ">

                    <div class="dual-box__left ">
                        <header class="clients__header mg-bt-25 ">
                            <h2 class="section__title ">Завод кранов UNIQ CRANE. С 2011 года производим краны.
                                Качественно, быстро и надёжно.</h2>
                        </header>

                        <div class="about-company " style=" border-bottom: 1px solid rgba(255, 255, 255, 0.2); ">

                            <p>UNIQ CRANE — производственная компания с высокими стандартами. Мы предлагаем комплексные
                                решения в области грузоподъёмного оборудования, начиная от разработки проектной
                                документации и заканчивая сдачей кранов в эксплуатацию.</p>

                        </div>

                        <div class="achievements ">

                            <div>
                                <div class="achievements-items ">
                                    <p class="achievements-items__numbers ">7 лет</p>
                                </div>
                                <p class="achievements-items__text ">работы</p>
                            </div>

                            <div>
                                <div class="achievements-items ">
                                    <p class="achievements-items__numbers ">418</p>
                                </div>
                                <p class="achievements-items__text ">клиентов</p>
                            </div>

                            <div>
                                <div class="achievements-items ">
                                    <p class="achievements-items__numbers ">637</p>
                                </div>
                                <p class="achievements-items__text ">отгружено кранов</p>
                            </div>
                        </div>

                        <a href="# " class="section__link ">Подробнее о компании</a>

                    </div>

                    <div class="dual-box__right dual-box__right--footer ">

                        <div>
                            <img class="dual__background-right dual__background-right--regular "
                                 src="./assets/img/backgrounds/7.png " alt=" ">
                        </div>


                        <div class="recall-wrap ">
                            <div class="recall-wrap-2 ">
                                <header class="clients__header ">
                                    <h2 class="recall__title ">Бесплатный выезд специалиста
                                    </h2>
                                </header>

                                <div class="recall ">
                                    <p class="recall__text "> Нет времени изучать? Мы сами перезвоним и проконсультируем
                                        по любым вопросам</p>

                                </div>

                                <div class="input-fields-footer ">

                                    <div class="input-group ">
                                        <input type="text " required>
                                        <label>Введите ваше имя</label>
                                    </div>

                                    <div class="input-group ">
                                        <input type="number " required>
                                        <label>Введите ваш телефон</label>
                                    </div>
                                </div>

                                <button class="button mg-bt-40 "><span class="button__text ">отправить запрос</span>
                                </button>
                                <div>
                                    <input type="checkbox " class="check__element " id="privacy-policy "
                                           name="privacy-policy " value="yes ">
                                    <label for="privacy-policy ">
                                        <a href="# "><span>Нажимая на кнопку «Получить консультацию», вы соглашаетесь
с политикой конфиденциальности</span></a> </label>
                                </div>
                            </div>
                        </div>
                        <div class="footer__bottom--mobile ">
                            <div class="copyright ">
                                <p>© 2021 «Uniq Crane» Все права защищены</p>
                            </div>
                            <div class="studio ">
                                <a href=" " class="dsp-f ">
                                    <p>Разработка сайта —</p>
                                    <div class="studio__logo "><img src="./assets/img/Forestweb-tree.svg " alt=" "><img
                                            src="./assets/img/Forestweb.svg " alt=" "></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer__bottom footer__bottom--regular ">
                    <div class="copyright ">
                        <p>© 2021 «Uniq Crane» Все права защищены</p>
                    </div>
                    <div class="studio ">
                        <a href=" " class="dsp-f ">
                            <p>Разработка сайта —</p>
                            <div class="studio__logo "><img src="./assets/img/Forestweb-tree.svg " alt=" "><img
                                    src="./assets/img/Forestweb.svg " alt=" "></div>
                        </a>
                    </div>
                </div>
            </div>


        </div>

    </div>
@show

<x-popup-request />

@if(isset(Auth::user()->is_admin))
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" defer></script>
    <script src="{{ asset('js/ckeditor_scripts/init.js') }}" defer></script>
    <script src="{{ asset('js/ckeditor_scripts/save_content.js') }}" defer></script>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js "
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin=" anonymous "></script>
<script type="text/javascript" src="{{ asset('assets/js/scrolloverflow.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js "
        integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 "
        crossorigin="anonymous "></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
@if(request()->routeIs('contacts'))
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);

        function init() {

            let points = [];

            let pointers = [];

            try {

                map = new ymaps.Map("map", {
                    center: [55.593873, 37.351905],
                    zoom: 12,
                    controls: ['smallMapDefaultSet']
                });

                map.panes.get('ground').getElement().style.filter = 'grayscale(100%)';

                // Создание точек
                $('[data-addr-id]').each(function (index, item) {
                    let pointer = createPoint(item);
                    map.geoObjects.add(pointer);
                });

                // Активация точки по клику в контактах
                $('[data-addr-id]').click(function () {
                    const addrId = $(this).data('addrId');

                    $('.page-navigation__button--active').removeClass('page-navigation__button--active');
                    $(this).addClass('page-navigation__button--active');

                    setActivePoint(addrId);
                });

            } catch (e) {
            }

            // Cоздание точки и указателя из data-атрибутв DOM-элемента
            // Возвращает объект Placemark
            function createPoint(item) {
                let point = {
                    id: $(item).data('addrId'),
                    coords: $(item).data('coords').split(','),
                };
                points.push(point);

                let pointer = new ymaps.Placemark(point.coords, {
                    balloonContent: ``,
                    addrId: point.id,
                    addrCoords: point.coords
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: './assets/img/icons/map.svg',
                    iconImageSize: [70, 70],
                    iconImageOffset: [-35, -35]
                });

                pointers.push(pointer);

                return pointer;
            }

            // Возвращает указатель по его id
            function getPointerById(id) {
                const pointer = pointers.filter(item => {
                    return item.properties.get('addrId') == id;
                }).pop();

                return pointer;
            }

            // Устанавливает указатель по центру карты
            function setActivePoint(id) {
                const pointer = getPointerById(id);

                pointer.options.set({
                    iconImageHref: './assets/img/icons/map.svg',
                    iconImageSize: [60, 70],
                });

                map.setCenter(pointer.properties.get('addrCoords'));
            }
        }
    </script>
@endif
</body>

</html>
