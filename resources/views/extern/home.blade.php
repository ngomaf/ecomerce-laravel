@extends('extern.layout')
@section('title', 'Home')
@section('content')

        <section class="container py-5 text-center">
            <h1 class="text-body-emphasis">{{ config('app.name', 'Laravel') }}</h1>
            <p class="col-lg-8 mx-auto lead">
                This takes the basic jumbotron above and makes its background
                edge-to-edge with a <code>.container</code> inside to align content.
                Similar to above, it's been recreated with built-in grid and utility
                classes.
            </p>
        </section>

        <section class="container">
            <div class="row mb-3 space-top">
                @foreach ($products as $product)
                    <div class="col-4 themed-grid-col">
                        <div class="card">
                            <figure>
                                <img src="{{ asset($product->image) }}" alt="alternatice-text">
                            </figure>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($product->description, 150) }}</p>
                                <a href="/produto/{{ $product->slug }}" class="btn btn-primary" title="Ver mais">Detalhes</a>

                                <form style="display: inline-block;" action="/carrinho" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="hidden" name="qnt" value="1">
                                    <button class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="container">
            {{ $products->links('pagination::bootstrap-5') }}
        </section>
    
@endsection