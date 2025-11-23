@extends('layout')
@section('title', 'Produtos')
@section('content')
        <div class="container struture">
            <div class="row mb-3">
                <div class="col-md-9 themed-grid-col">
                    <section class="row mb-3">
                        <div class="col-8">
                            <h2>Produtos</h2>                            
                        </div>
                        <div class="col-4">
                            <form class="d-flex" role="search">
                                <input
                                class="form-control me-2"
                                type="search"
                                placeholder="Pesquisar produto..."
                                aria-label="Search"
                                />
                            </form>
                        </div>
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
                                            <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
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

                    <br>
                    <div class="row mb-3">
                        <h2>Mais vendidos</h2>
                    </div>
                    
                    <ul class="list-unstyled card-simple">
                        @foreach ($productsMoreBuy as $prod)
                            <li>
                                <a
                                    class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="/produto/{{ $prod->slug }}"
                                >
                                    <figure>
                                        <img src="{{ asset($prod->image) }}" alt="alternatice-text">
                                    </figure>
                                    <div class="col-lg-8">
                                    <h6 class="mb-0">{{ $prod->name }}</h6>
                                    <small class="text-body-secondary">{{ $dateFormatter($prod->created_at) }}</small>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endsection