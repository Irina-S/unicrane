@extends('layouts.app')
@section('footer', false)

@section('content')

    <div class="content-container">
        <nav class="site-navigation">
            <a class="nav-pages" href="{{ route('index') }}">Главная</a>
            <span class="nav-pages__slash">/</span>
            <a class="nav-pages" href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </div>

    <div class="content-container">
        <x-editable-component tag="h1" class="page-title" dir="contacts" id="1"/>
    </div>

    <div id="map" style="width: 100%; height: 800px">
        <div id="regular-page" class="content-container content-container--regular ">
            <div class="page-navigation__wrap page-navigation__wrap--map">

                <div class="page-navigation page-navigation--map">

                    <button class="page-navigation__button page-navigation__button--active"
                            data-coords="55.59387356912636,37.351958144180216" data-addr-id="addr1"> <span>г. Москва г. Московскийул. Хабарова д. 2
</span></button>
                    <button class="page-navigation__button" data-coords="55.68877990576911,37.989332896819995"
                            data-addr-id="addr2"> <span>д. Машково, Новомарусинский
          проезд, д. 10
          </span></button>
                    <button class="page-navigation__button" data-coords="48.281520573980416,41.037279"
                            data-addr-id="addr3"> <span>Район, п. Шолоховский,
          ул. Социалистическая д.7
          </span></button>

                </div>
            </div>
        </div>
    </div>

@endsection
