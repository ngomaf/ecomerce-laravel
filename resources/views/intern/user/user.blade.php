@extends('layout')
@section('title', "{$user->firstName} - Utilizador")
@section('content')
        <div class="container">
            <div class="title-actions">
                <div>
                    <h3>{{ $user->firstName }} {{ $user->middleEndLastName }}</h3>
                    <p>{{ $user->email }}</p>
                </div>
                <div>
                    <ul class="button-list">
                        <li><a class="btn btn-success" href="/admin/utilizador/{{ $user->slug }}/edit"><i class="bi bi-pencil"></i> Editar</a></li>
                        <li><a class="btn btn-warning" href="/admin/utilizador/{{ $user->slug }}/senha"><i class="bi bi-key"></i> Alterar senha</a></li>
                        {{-- <li>
                            <a class="btn btn-danger" href="#"><i class="bi bi-trash3"></i> Eliminar</a>
                            <form style="display: inline-block;" action="{{ route('utilizador.destroy', $user->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i> Eliminar</button>
                            </form>
                        </li> --}}
                    </ul>
                </div>
            </div>
            
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
            
            <div class="complement-data">
                <p>Data de cadastro: {{ $user->created_at }} <br>
                Última actualização: {{ $user->updated_at }}</p>
            </div>
        </div>
@endsection