@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div class="content-container">
        <nav class="site-navigation">
            <a class="nav-pages" href="{{ route('index') }}">Главная</a>
            <span class="nav-pages__slash">/</span>
            <a class="nav-pages" href="{{ route('equipment') }}">Оборудование</a>
        </nav>
    </div>

    <section class="mg-bt-95">
        <div class="content-container">
            <x-editable-component tag="h1" class="page-title" dir="equipment" id="1"/>

            <div class="page-description">
                <div class="page-description__text">
                    <x-editable-component tag="p" class="" dir="equipment" id="2"/>
                    <x-editable-component tag="p" class="" dir="equipment" id="3"/>
                </div>
                <div class="page-description__text">
                    <x-editable-component tag="p" class="" dir="equipment" id="4"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mg-bt-185">
        <div class="content-container">
            <x-editable-component tag="h2" class="section__title section__title--1 mg-bt-35" dir="equipment" id="5"/>

            <div class="cards">

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="6"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/1.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="7"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/2.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="8"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/3.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="9"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/4.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="10"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/5.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="11"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/6.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="12"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/7.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-item__inner">
                        <div class="cards-title">
                            <x-editable-component tag="p" class="" dir="equipment" id="13"/>
                        </div>

                        <div class="cards-item__circle">
                            <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/8.png"
                                 alt="">
                        </div>
                        <a href="#" class="cards-item__link-button"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mg-bt-150">
        <div class="content-container">
            <x-editable-component tag="h2" class="section__title section__title--1 mg-bt-35" dir="equipment" id="14"/>

            <div class="cards">

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="15"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/1.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="16"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/2.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="17"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/3.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="18"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/4.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="19"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/5.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <x-editable-component tag="p" class="" dir="equipment" id="20"/>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/6.png"
                             alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

            </div>
        </div>
    </section>
@endsection
