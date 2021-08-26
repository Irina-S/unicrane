@extends('layouts.app_login')

@section('content')
    <div class="container">
        <h1>Админ панель сайта</h1>
        <h2>Панель SEO</h2>
        <p>Редактировать страницу: {{ $page->title }}</p>
        <a href="{{ route($page->page_name) }}" target="_blank">Перейти на эту страницу: {{ $page->title }}</a>
        <div>
            <form action="{{ route('admin.seo.update', $page->id) }}" method="post" style="display: flex; flex-direction: column">
                @csrf
                <label for="title">Title страницы</label>
                <input type="text" name="title" id="title"
                       @if(old('title'))
                       value="{{ old('title') }}"
                       @else
                       value="{{ $page->title }}"
                        @endif>
                @if($errors->has('title'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->get('title') as $err)
                            {{ $err }}
                        @endforeach
                    </div>
                @endif

                <label for="description">Description страницы</label>
                <textarea name="description" id="description">
                    @if(old('description'))
                        {{ old('description') }}
                    @else
                        {{ $page->description }}
                    @endif
                </textarea>
                @if($errors->has('description'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->get('description') as $err)
                            {{ $err }}
                        @endforeach
                    </div>
                @endif

                <label for="keywords">Keywords страницы</label>
                <textarea name="keywords" id="keywords">
                    @if(old('keywords'))
                        {{ old('keywords') }}
                    @else
                        {{ $page->keywords }}
                    @endif
                </textarea>
                @if($errors->has('keywords'))
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->get('keywords') as $err)
                            {{ $err }}
                        @endforeach
                    </div>
                @endif

                <button>Сохранить изменения</button>
            </form>
        </div>

    </div>
@endsection
