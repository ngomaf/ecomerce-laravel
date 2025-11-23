@extends('layout')
@section('title', 'Dashboard')
@section('content')
        <div class="container">
            <div class="row md-3">
                <h2>@yield('title')</h2>
                <p>Olá {{ auth()->user()->firstName }} {{ auth()->user()->middleEndLastName }}.</p>

            </div>
        </div>
@endsection