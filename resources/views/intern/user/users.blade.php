@extends('layout')
@section('title', 'Utilizadores')
@section('content')
        <div class="container">
            <h3>Utilizadores do e-comerce</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Criação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td><a href="/admin/utilizador/{{ $user->slug }}">{{ $user->firstName }} {{ $user->middleEndLastName }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $dateFormatter($user->created_at) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection