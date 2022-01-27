@extends('layouts.main')

@section('main-content')
    <main class="comic-details">
        <section class="jumbo">
            <div class="container">
                <img class="pt-5 pb-3 thumb" src="{{ $comic['thumb'] }}" alt="{{ "Thumb {$comic['title']}" }}">
            </div>
        </section>

        <section class="info">
            <div class="container py-5">
                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <h2 class="title">{{ $comic['title'] }}</h2>
                        <div class="green-tab">
                            U.S. Price: <span class="price">{{ $comic['price'] }}</span>
                        </div>
                        <div class="desc">
                            {!! $comic['description'] !!}
                        </div>
    
                    </div>
                    <div class="col-sm-12 col-md-2 adv">
                        <div class="text-end text-uppercase">ADVERTISEMENT</div>
                        <img src="{{ asset('images/adv.jpg') }}" alt="Adv">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection