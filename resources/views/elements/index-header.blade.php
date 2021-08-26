<div class="container">
    <header class="header">
        <div class="header__open-menu">
            <div class="header__open-menu-panel">
                <a href="#" class="logo"><img src="./storage/img/site-logo-white.svg" alt="img"></a>
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
                    <a href="#" class="header__link">Прайс</a>
                    <a href="{{ route('equipment') }}" class="header__link">Оборудование</a>
                    <a href="{{ route('service') }}" class="header__link">Сервис</a>
                    <a href="#" class="header__link">Информация</a>
                    <a href="{{ route('about') }}" class="header__link">О заводе</a>
                    <a href="{{ route('contacts') }}" class="header__link">Контакты</a>
                </div>
                <div class="header__open-menu-phone">+7 495 540 50 53</div>
                <button class="header__open-menu-button">оставить заявку</button>
            </div>
        </div>
        <a href="{{ route('index') }}" class="logo"><img src="./storage/img/logo-w.svg" alt="img"></a>
        <div class="dsp-f">
            <div class="header__content">
                <button class="product-catalog">
                    <div class="burger">
                        <div class="burger__lines"></div>
                    </div>
                    <span class="product-catalog__title">Каталог продукции</span>
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
                    <a class="phone" href="tel:+74955405053"> <span class="phone__text">+7 495 540 50 53</span></a>
                </div>
            </div>
            <button class="leave-request request">оставить заявку</button>
        </div>
    </header>
</div>
