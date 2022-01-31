@extends('layout.layout')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4 m-4">
        @foreach ($dataBarang as $index => $data)
            @if ($index % 2 != 0)
                <div class="col">
                    <div class="box card h-100 ">
                        <img src="{{ $data['cover'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['product_name'] }}</h5>
                            <p class="card-text">{{ $data['description'] }}</p>
                            <div class="layout">
                                <div class="kotak">
                                    <span><a href="#">Sponsored by Ads</a></span>
                                </div>
                                <div class="kotak2">
                                    <span>
                                        {{ $data['likes'] }}
                                        <a href="#">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </a>
                                        <a href="#">
                                            <ion-icon name="pricetag"></ion-icon>
                                        </a>

                                        <a href="#">
                                            <ion-icon name="share-social-outline"></ion-icon>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col">
                    <div class="box card h-100">
                        <img src="{{ $data['cover'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['product_name'] }}</h5>
                            <p class="card-text">{{ $data['description'] }}</p>
                            <div class="layout">
                            <div class="kotak2">
                                <span>
                                {{ $data['likes'] }}
                                <a href="#">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="pricetag-outline"></ion-icon>
                                </a>

                                <a href="#">
                                    <ion-icon name="share-social-outline"></ion-icon>
                                </a>
                            </span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
