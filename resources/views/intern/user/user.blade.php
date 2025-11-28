@extends('layout')
@section('title', "{$user->firstName} - Utilizador")
@section('content')
        <div class="container">
            <h3>{{ $user->firstName }} {{ $user->middleEndLastName }}</h3>
            <p>{{ $user->email }}</p>
            
            <br>

            <div class="two-blocks">
                <div>
                    @if ($user->cities->count())
                        <h4>Cidades do utilizador ({{ $user->cities->count() }})</h4>
                        <ul>
                            @foreach ($user->cities as $city)
                            <li>
                                <p>{{ $city->name }} - {{ $city->province->name }} [{{ $city->province->code }}]
                                <br>Código postal: {{ $city->postal_code }}</p>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div>
                    @if ($user->products->count())
                        <h4>Produtos do utilizador ({{ $user->products->count() }})</h4>
                        <ol>
                            @foreach ($user->products as $product)
                                <li><a href="/admin/produto/{{ $product->slug }}">{{ $product->name }}</a></li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
            
            <div>
                <p>Data de cadastro: {{ $user->created_at }}</p>
                <p>Última actualização: {{ $user->updated_at }}</p>
            </div>
        </div>
@endsection