@extends('layout')
@section('title', 'Produtos')
@section('content')
        <div class="container">
            <div class="row title">
                <div class="col-md-8">
                    <h3>Produtos do e-comerce</h3>
                </div>
                <div class="col-md-4 right">
                    <a class="btn btn-success" href="/admin/produto/create">Novo <span>+</span></a>
                    <a class="btn btn-warning" href="/admin/produto/categoria">Categoria <span class="bi bi-tags"></span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Acções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td><a href="/admin/produto/{{ $product->slug }}">{{ $product->name }}</a></td>
                        <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td><a href="/admin/produto/categoria/{{ $product->category->slug }}">{{ $product->category->name }}</a></td>
                        <td>{{ $dateFormatter($product->created_at) }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="/admin/produto/{{ $product->slug }}/edit"><i class="bi bi-pencil"></i></a>&nbsp;
                            <form style="display: inline-block;" action="{{ route('produto.destroy', $product->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
@endsection