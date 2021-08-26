@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div class="content-container">
        <nav class="site-navigation">
            <a class="nav-pages" href="{{ route('index') }}">Главная</a>
            <span class="nav-pages__slash">/</span>
            <a class="nav-pages" href="{{ route('service') }}">Крановый сервис</a>
        </nav>
    </div>

    <section class="mg-bt-50">
        <div class="content-container">
            <x-editable-component tag="h1" class="page-title" dir="service" id="1"/>

            <div class="page-description">
                <div class="page-description__text">
                    <x-editable-component tag="p" class="" dir="service" id="2"/>
                </div>
            </div>
        </div>
    </section>

    <div class="mg-bt-150">
        <div class="content-container">
            <div class="cards">

                <div class="cards-item cards-item--service">
                    <div class="cards-item__inner">
                        <img class="cards__image" src="./assets/img/cards-item/service/1.png" alt="">

                        <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                        <div class="cards-mask">

                            <x-editable-component tag="p" class="cards-mask__title" dir="service" id="3"/>
                            <x-editable-component tag="p" class="cards-mask__text" dir="service" id="4"/>
                            <a class="cards-mask__more" href="">Читать подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/2.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="5"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="6"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/3.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="7"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="8"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/4.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="9"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="10"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/5.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="11"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="12"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/6.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="13"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="14"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/7.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="15"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="16"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/8.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="17"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="18"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/9.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <x-editable-component tag="p" class="cards-mask__title" dir="service" id="19"/>
                        <x-editable-component tag="p" class="cards-mask__text" dir="service" id="20"/>
                        <a class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
