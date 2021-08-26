@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div style="position:relative">

        <div style="position:relative">
            <img class="page-description__background" src="./assets/img/backgrounds/about-factory.png" alt="">
            <div id="regular-page" class="content-container content-container--regular ">

                <nav class="site-navigation">
                    <nav class="mg-bt-35">
                        <a class="nav-pages" href="{{ route('index') }}">Главная</a>
                        <span class="nav-pages__slash">/</span>
                        <a class="nav-pages" href="{{ route('about') }}">Рассчитать стоимость крана</a>
                    </nav>
                </nav>

                <section>
                    <h1 class="section__title choose-crane-type__header ckeditor" id="calculate_editor1" data-dir="calculate"
                        @if(isset(Auth::user()->is_admin)) contenteditable="true" @endif>
                        @include('content.calculate.calculate_editor1')
                    </h1>
                </section>
            </div>

        </div>
        <div class="choose-crane-type" id="app">
            <calculate-component ref="calculate"></calculate-component>
        </div>
    </div>
@endsection
