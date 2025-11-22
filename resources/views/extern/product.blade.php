@extends('extern.layout')
@section('title', "{$product->name} - Produto")
@section('content')
        <section class="container struture">
            <div class="row mb-3 single">
                <div class="col-md-5 themed-grid-col image-div">
                    <img src="{{ asset($product->image) }}" alt="alternave of image">
                </div>
                <div class="col-md-7 themed-grid-col">
                    <div class="col d-flex flex-column align-items-start gap-2">
                        <h2 class="fw-bold text-body-emphasis">{{ $product->name }}</h2>
                        <h2 class="text-body-emphasis" title="Preço">{{ number_format($product->price, 2, ',', '.') }} AKZ</h2>
                        <p class="text-body-secondary">{{ $product->description }}</p>

                        <p>Categoria: <i class="bi bi-tag-fill"></i> <a href="/produto/categoria/{{ $product->category->slug }}">{{ $product->category->name }}</a> <span class="link-secondary">|</span> por: <i class="bi bi-person-circle"></i> <a href="/funcionario/{{ $product->user->slug }}">{{ $product->user->firstName }} {{ $product->user->middleEndLastName }}</a></p>

                        <form action="/carrinho" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <div class="col-md-12">
                                <p>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="cc-number"
                                        placeholder="123"
                                        name="qnt" 
                                        value="1"
                                        min="1"
                                        required
                                    />
                                </p>
                            </div>
                            <button class="btn btn-warning btn-lg"><i class="bi bi-cart-plus-fill"></i> Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container struture">
            <div class="row mb-3">
                <h2 class="display-6 text-center mb-4">Outros produtos relacionados</h2>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam id obcaecati quo odit libero. Recusandae ipsa, iure sint magnam unde tempora dignissimos fuga deserunt necessitatibus, voluptas repellendus magni. Dignissimos, impedit, pariatur veritatis dolore, assumenda nisi deserunt provident minus sit sequi iure cum soluta magnam? Cum quis iure mollitia illum aliquid accusamus dignissimos eligendi quisquam corporis alias natus recusandae explicabo, maiores animi. Aliquid qui vel amet excepturi doloribus debitis alias natus, soluta rerum quis deserunt saepe ex quo earum iste id ab tenetur, enim exercitationem porro obcaecati rem ipsum non veniam? Minus, neque. Ab illo rem incidunt, porro saepe unde? Repellat!</p>
            </div>
        </section>

@endsection