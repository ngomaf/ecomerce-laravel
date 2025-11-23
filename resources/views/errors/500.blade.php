@extends('layout')
@section('title', 'Erro 500')
@section('content')
        <div class="error">
            <div class="text-center error-box p-4 border rounded-4 shadow-lg bg-body-secondary">
                <i class="bi bi-exclamation-triangle display-1 text-warning"></i>
                <h1 class="mt-3 fw-bold">Erro 500</h1>
                <p class="mb-4">
                    Houve um erro interno ao tente navegar por outras páginas do site, esperar um pouco para voltar a tentar. Se o problema persistir, por favor entre em contacto.
                </p>
    
                <a href="/" class="btn btn-primary w-100 mb-2">Voltar à Página Inicial</a>
    
                <!-- Botão para alternar entre Light / Dark -->
                <button id="toggleTheme" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-phone"></i> Contactar o web master
                </button>
            </div>
        </div>
@endsection