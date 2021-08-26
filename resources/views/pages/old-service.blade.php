@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div id="regular-page" class="content-container content-container--regular ">

        <nav class="site-navigation">
            <nav class="mg-bt-35">
                <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                <span class="nav-pages__slash">/</span>
                <a class="nav-pages" href="{{ route('service') }}">Крановый сервис</a>
            </nav>
        </nav>

        <section class="mg-bt-50">
            <h1 class="section__title mg-bt-35 ckeditor" id="service_editor1" data-dir="service"
                @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                @include('content.service.service_editor1')
            </h1>

            <div class="page-description">
                <div class="page-description__text">
                    <p class="ckeditor" id="service_editor2" data-dir="service"
                       @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.service.service_editor2')
                    </p>
                </div>
            </div>
        </section>

        <section class="mg-bt-150">
            <div class="cards">

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/1.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor3" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor3')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor4" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor4')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/2.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor5" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor5')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor6" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor6')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/3.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor7" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor7')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor8" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor8')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/4.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor9" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor9')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor10" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor10')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/5.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor11" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor11')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor12" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor12')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/6.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor13" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor13')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor14" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor14')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/7.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor15" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor15')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor16" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor16')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/8.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor17" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor17')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor18" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor18')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>

                <div class="cards-item cards-item--service">
                    <img class="cards__image" src="./assets/img/cards-item/service/9.png" alt="">

                    <img class="arrow" src="./assets/img/icons/arrow.svg" alt="">

                    <div class="cards-mask">

                        <p class="cards-mask__title ckeditor" id="service_editor19" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor19')
                        </p>
                        <p class="cards-mask__text ckeditor" id="service_editor20" data-dir="service"
                           @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                            @include('content.service.service_editor20')
                        </p>
                        <a  class="cards-mask__more" href="">Читать подробнее</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
