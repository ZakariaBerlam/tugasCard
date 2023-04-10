<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
@extends('home')
@section('konten')
    <div class="col-4 col-md-4 text-center justify-content-center">
        @foreach ($produk as $prod)
            @if ($prod['Status Product'] == 'SSR')
                <div class="card1">
                    <img class="card-img-top" src="{{ asset('gambar/' . $prod['image']) }}"
                        alt="{{ $prod['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$prod["Product name"]}}">{{ $prod['Product name'] }}</a>
                        <h5 class="card-title">{{ $prod['Status Product'] }}</h5>
                        <p class="card-text">{{ $prod['Product Price'] }}</p>
                    </div>
                </div>
            @elseif ($prod['Status Product']=='SR')
                <div class="card2">
                    <img class="card-img-top" src="{{ asset('gambar/' . $prod['image']) }}"
                        alt="{{ $prod['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$prod["Product name"]}}">{{ $prod['Product name'] }}</a>
                        <h5 class="card-title">{{ $prod['Status Product'] }}</h5>
                        <p class="card-text">{{ $prod['Product Price'] }}</p>
                    </div>
                </div>
            @elseif ($prod['Status Product']=='R')
                <div class="card3">
                    <img class="card-img-top" src="{{ asset('gambar/' . $prod['image']) }}"
                        alt="{{ $prod['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$prod["Product name"]}}">{{ $prod['Product name'] }}</a>
                        <h5 class="card-title">{{ $prod['Status Product'] }}</h5>
                        <p class="card-text">{{ $prod['Product Price'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection



@section('judul')
    Alooooo
@endsection

</body>
</html>
