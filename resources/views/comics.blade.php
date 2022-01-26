@extends('layouts.main')

@section('main-content')
    <main class="comics py-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-sm-12 col-md-6 col-lg-2 py-3">
                        <div class="thumb">
                            <img src="{{ $comic['thumb'] }}" alt="{{ 'Thumb '.$comic['title'] }}">
                        </div>
                        <div class="info py-2">
                            {{ $comic['title'] }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <button class="site-btn">Load more</button>
            </div>
        </div>
    </main>
@endsection