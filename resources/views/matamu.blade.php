<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
@extends('detail')
@section('detil')
<div class="col-4 col-md-4 text-center justify-content-center">
            @if ($kowe['Status Product'] == 'SSR')
                <div class="card1">
                    <img class="card-img-top" src="{{ asset('gambar/' . $kowe['image']) }}"
                        alt="{{ $kowe['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$kowe["Product name"]}}">{{ $kowe['Product name'] }}</a>
                        <h5 class="card-title">{{ $kowe['Status Product'] }}</h5>
                        <p class="card-text">{{ $kowe['Product Price'] }}</p>
                        <p class="card-text">{{ $kowe['Penjelasan'] }}</p>
                    </div>
                </div>
            @elseif ($kowe['Status Product']=='SR')
                <div class="card2">
                    <img class="card-img-top" src="{{ asset('gambar/' . $kowe['image']) }}"
                        alt="{{ $kowe['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$kowe["Product name"]}}">{{ $kowe['Product name'] }}</a>
                        <h5 class="card-title">{{ $kowe['Status Product'] }}</h5>
                        <p class="card-text">{{ $kowe['Product Price'] }}</p>
                        <p class="card-text">{{ $kowe['Penjelasan'] }}</p>
                    </div>
                </div>
            @elseif ($kowe['Status Product']=='R')
                <div class="card3">
                    <img class="card-img-top" src="{{ asset('gambar/' . $kowe['image']) }}"
                        alt="{{ $kowe['Product name'] }}">
                    <div class="card-body">
                        <a href="/Produk/{{$kowe["Product name"]}}">{{ $kowe['Product name'] }}</a>
                        <h5 class="card-title">{{ $kowe['Status Product'] }}</h5>
                        <p class="card-text">{{ $kowe['Product Price'] }}</p>
                        <p class="card-text">{{ $kowe['Penjelasan'] }}</p>
                    </div>
                </div>
            @endif
</div>
@endsection
</body>
</html>
