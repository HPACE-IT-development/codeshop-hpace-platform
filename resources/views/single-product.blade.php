@extends('layouts.main')

@section('content')
    <main class="main-product">
        <div class="product-info-block">
            <img src="" class="product-image" alt="{{ $product->title }}">
            <div class="product-info">
                <h2>{{ $product->title }}</h2>
                <h3>{{ $product->price }}</h3>
                <p>{{ $product->desc }}</p>
            </div>
        </div>
    </main>
@endsection
