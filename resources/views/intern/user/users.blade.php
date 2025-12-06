@extends('layout')
@section('title', 'Utilizadores')
@section('content')
        <div class="container">
            <div class="row title">
                <div class="col-md-8">
                    <h3>Utilizadores do e-comerce</h3>
                </div>
                <div class="col-md-4 right">
                    <a class="btn btn-success" href="/admin/utilizador/create">Novo <span>+</span></a>
                </div>
            </div>
        </div>
        
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
        
        @if (Session::get('deleted'))

            <div class="container">
                <div
                    class="alert alert-warning alert-dismissible fade show"
                    role="alert"
                >
                    {{ Session::get('deleted') }}.
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            </div>
            
        @endif
        
        @if (Session::get('error'))

            <div class="container">
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    {{ Session::get('error') }}.
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                </div>
            </div>
            
        @endif

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Acções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td><a href="/admin/utilizador/{{ $user->slug }}">{{ $user->firstName }} {{ $user->middleEndLastName }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $dateFormatter($user->created_at) }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="/admin/utilizador/{{ $user->slug }}/edit"><i class="bi bi-pencil"></i></a>&nbsp;
                            <a class="btn btn-primary btn-sm" href="/admin/utilizador/{{ $user->slug }}/senha"><i class="bi bi-key"></i></a>&nbsp;
                            <form style="display: inline-block;" action="{{ route('utilizador.destroy', $user->slug) }}" method="post">
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
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
@endsection