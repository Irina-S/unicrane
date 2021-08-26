@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div class="content-container content-container--regular">

        <nav class="site-navigation">
            <nav class="mg-bt-35">
                <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                <span class="nav-pages__slash">/</span>
                <a class="nav-pages" href="{{ route('equipment') }}">Оборудование</a>
            </nav>
        </nav>

        <section class="mg-bt-95">
            <h1 class="section__title mg-bt-35 ckeditor" id="equipment_editor1" data-dir="equipment"
                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                @include('content.equipment.equipment_editor1')
            </h1>

            <div class="page-description">
                <div class="page-description__text">
                    <p class="ckeditor" id="equipment_editor2" data-dir="equipment"
                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.equipment.equipment_editor2')
                    </p>
                    <p class="ckeditor" id="equipment_editor3" data-dir="equipment"
                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.equipment.equipment_editor3')
                    </p>
                </div>
                <div class="page-description__text">
                    <p class="ckeditor" id="equipment_editor4" data-dir="equipment"
                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.equipment.equipment_editor4')
                    </p>
                </div>
            </div>
        </section>

        <section class="mg-bt-185">
            <h2 class="section__title section__title--1 mg-bt-35 ckeditor" id="equipment_editor5" data-dir="equipment"
                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                @include('content.equipment.equipment_editor5')
            </h2>

            <div class="cards">

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor6" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor6')
                        </p>
                    </div>
                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/1.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor7" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor7')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/2.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor8" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor8')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/3.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor9" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor9')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/4.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor10" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor10')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/5.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor11" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor11')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/6.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>


                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor12" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor12')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/7.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor13" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor13')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/8.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>
            </div>
        </section>


        <section class="mg-bt-150">
            <h2 class="section__title section__title--1 mg-bt-35 ckeditor" id="equipment_editor14" data-dir="equipment"
                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                @include('content.equipment.equipment_editor14')
            </h2>
            <div class="cards">

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor15" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor15')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/1.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor16" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor16')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/2.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor17" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor17')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/3.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor18" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor18')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/4.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor19" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor19')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/5.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

                <div class="cards-item">

                    <div class="cards-title">
                        <p class="ckeditor" id="equipment_editor20" data-dir="equipment"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.equipment.equipment_editor20')
                        </p>
                    </div>

                    <div class="cards-item__circle">
                        <img class="cards__image cards__image--in-circle" src="./assets/img/cards-item/add/6.svg" alt="">
                    </div>
                    <a href="#" class="cards-item__link-button"></a>
                </div>

            </div>
        </section>

    </div>
@endsection
