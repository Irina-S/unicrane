@extends('layouts.app_login')

@section('content')
    <div class="container">
        <h1>Админ панель сайта</h1>
        <h2>Панель SEO</h2>
        <p>Все страницы сайта</p>
        <ul>
            @foreach($pages as $item)
                <li><a href="{{ route('admin.seo.edit', $item->id) }}">{{ $item->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
