@extends('extern.layout')
@section('title', 'Carrinho de compra')
@section('content')
        <section class="container struture">
            <div class="row">
                <h2><i class="bi bi-cart"></i> Carrinho de compras</h2>
                <p>Seu carrinho possui <strong>{{ $items->count() }}</strong> produtos.</p>
            </div>
        </section>
        <br>

        @if (Session::get('success'))

            <div class="container">
                <div
                    class="alert alert-success alert-dismissible fade show"
                    role="alert"
                >
                    {{ Session::get('success') }}.
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            </div>
            
        @endif

        @if (Session::get('warning'))

            <div class="container">
                <div
                    class="alert alert-warning alert-dismissible fade show"
                    role="alert"
                >
                    {{ Session::get('warning') }}.
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            </div>
            
        @endif

        @if (Session::get('info'))

            <div class="container">
                <div
                    class="alert alert-info alert-dismissible fade show"
                    role="alert"
                >
                    {{ Session::get('info') }}.
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            </div>
            
        @endif
        
        <br>

        @if ($items->count() == 0)

            <div class="container">
                <h4>Seu <i class="bi bi-cart"></i> carrinho está vazio. Encontre produtos <a href="/produto">aqui<i class="bi bi-link-45deg"></i></a>.</h4>
                
                <br>

                <div class="col-md-3">
                    <a href="/produto" class="w-100 btn btn-primary" type="submit">
                        <i class="bi bi-arrow-left"></i> Econtrar produtos
                    </a>
                </div>
            </div>

        @else

            <section class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Preço unitário (AKZ)</th>
                        <th scope="col">Preço (AKZ)</th>
                        <th scope="col">Qtd</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $totPriceProd = 0; @endphp

                    @foreach ($items as $item)
                    @php $totPriceProd += $item->price * $item->quantity; @endphp
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->price, 2, ',', '.') }}</td>
                        <td>{{ number_format($item->price * $item->quantity, 2, ',', '.') }}</td>
                        <td>
                        <form action="/carrinho/actualizar" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <div class="col-md-3">
                                <input
                                    style="font-weight: 900;"
                                    type="number"
                                    class="form-control"
                                    id="cc-number"
                                    placeholder="123"
                                    name="qnt" 
                                    value="{{ $item->quantity }}"
                                    min="1"
                                    required
                                />
                            </div>
                        </td>
                        <td style="display: flex;">
                            <button class="btn btn-warning" title="Actualizar quantidade este produto"><i class="bi bi-arrow-clockwise"></i></button>
                        </form>

                            &nbsp;&nbsp;
                            <form action="/carrinho/remover" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn btn-danger" title="Remover este produto do carrinho"><i class="bi bi-cart-dash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <br>
                    <h4 class="display-6 text-center">Total da compra AKZ: {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</h4>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <a href="/produto" class="w-100 btn btn-primary btn-lg" type="submit">
                            <i class="bi bi-arrow-left"></i> Continuar comprando
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/carrinho/limpar" class="w-100 btn btn-warning btn-lg" type="submit">
                            <i class="bi bi-brush"></i> Limpar carrinho
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button class="w-100 btn btn-success btn-lg" type="submit">
                            <i class="bi bi-check2"></i> Finalizar compra
                        </button>
                    </div>
                </div>
            </section>
            
        @endif
@endsection