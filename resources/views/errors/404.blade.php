@extends('layout')
@section('title', 'Erro 404 - página não encontrada')
@section('content')
        <div class="error">
            <div class="text-center error-box p-4 border rounded-4 shadow-lg bg-body-secondary">
                <i class="bi bi-exclamation-triangle display-1 text-warning"></i>
                <h1 class="mt-3 fw-bold">Erro 404</h1>
                <p class="mb-4">A página que está a tentar acessar não existe ou foi movida.</p>
    
    
                <a href="/" class="btn btn-primary w-100 mb-2">Voltar à Página Inicial</a>
    
    
                <!-- Botão para alternar entre Light / Dark -->
                <button id="toggleTheme" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-phone"></i> Contactar o web master
                </button>
            </div>
        </div>
@endsection
