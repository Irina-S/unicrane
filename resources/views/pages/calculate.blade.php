@extends('layouts.app')
@section('footer')
    @parent
@endsection

@section('content')
    <div class="content-container">
        <nav class="site-navigation">
            <a class="nav-pages" href="{{ route('index') }}">Главная</a>
            <span class="nav-pages__slash">/</span>
            <a class="nav-pages" href="{{ route('calculate') }}">Рассчитать стоимость крана</a>
        </nav>
    </div>

    <img class="page-description__background" src="./assets/img/backgrounds/about-factory.png" alt="">

    <div style="position:relative">

        <div style="position:relative">
            <div id="regular-page" class="content-container content-container--regular ">
                <section>
                    <h1 class="section__title choose-crane-type__header">Рассчитать стоимость крана</h1>
                </section>

            </div>

        </div>
        <div class="choose-crane-type" id="app">
            <calculate-component ref="calculate"></calculate-component>
        </div>

    </div>
@endsection
