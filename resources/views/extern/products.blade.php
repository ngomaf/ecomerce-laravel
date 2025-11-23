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
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="/produto/apple-standard-plus-4" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>

                            {{--  --}}
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 themed-grid-col">
                                <div class="card">
                                    <figure>
                                        <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Apple Standard Plus 4</h5>
                                        <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary" title="Ver mais">Detalhes</a>
                                        <a href="#" class="btn btn-primary btn-warning" title="Adicionar ao carrinho"><i class="bi bi-cart-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- paginate --}}
                        <div class="d-flex justify-content-center">
                            <div class="bd-example m-0 border-0">
                                <nav aria-label="Another pagination example">
                                    <ul class="pagination pagination-lg flex-wrap">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3 themed-grid-col">
                    <div class="row mb-3">
                        <h2>Categorias</h2>
                    </div>

                    <ul class="list-group category-menu">
                        <li class="list-group-item"><a href="#">A second item</a></li>
                        <li class="list-group-item"><a href="#">A third item</a></li>
                        <li class="list-group-item"><a href="#">A fourth item</a></li>
                        <li class="list-group-item"><a href="#">And a fifth one</a></li>
                        <li class="list-group-item disabled" aria-disabled="true">
                            A disabled item
                        </li>
                    </ul>

                    <br>
                    <div class="row mb-3">
                        <h2>Mais vendidos</h2>
                    </div>
                    
                    <ul class="list-unstyled card-simple">
                        <li>
                            <a
                                class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#"
                            >
                                <figure>
                                    <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                </figure>
                                <div class="col-lg-8">
                                <h6 class="mb-0">Example blog post title</h6>
                                <small class="text-body-secondary"
                                    >January 15, 2024</small
                                >
                                </div>
                            </a>
                        </li>
                        <li>
                            <a
                                class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#"
                            >
                                <figure>
                                    <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                </figure>
                                <div class="col-lg-8">
                                <h6 class="mb-0">Example blog post title</h6>
                                <small class="text-body-secondary"
                                    >January 15, 2024</small
                                >
                                </div>
                            </a>
                        </li>
                        <li>
                            <a
                                class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                href="#"
                            >
                                <figure>
                                    <img src="{{ asset('assets/images/product-item6.jpg') }}" alt="alternatice-text">
                                </figure>
                                <div class="col-lg-8">
                                <h6 class="mb-0">Example blog post title</h6>
                                <small class="text-body-secondary"
                                    >January 15, 2024</small
                                >
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection