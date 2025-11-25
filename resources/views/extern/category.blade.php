@extends('layout')
@section('title', "{$category->name} - Categoria")
@section('content')
        <div class="container struture">
            <div class="row mb-3">
                <div class="col-md-9 themed-grid-col">
                    <section class="row mb-3">
                        <h2>Categoria: {{ $category->name }}</h2>  
                        
                        <p>{{ $category->description }}</p>
                    </section>

                    <section>          
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

                        {{-- paginate --}}
                        <div class="container">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    </section>
                </div>
                <div class="col-md-3 themed-grid-col">
                    <div class="row mb-3">
                        <h2>Categorias</h2>
                    </div>

                    <ul class="list-group category-menu">
                        @foreach ($globCats as $category)
                            <li class="list-group-item"><a href="/produto/categoria/{{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                        <li class="list-group-item disabled" aria-disabled="true">
                            A disabled item
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection