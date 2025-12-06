@extends('layout')
@section('title', 'Editar senha - Utilizador')
@section('content')
        <div class="container struture">
            <div class="row">
                <div class="col-md-6 themed-grid-col">

                    @if ($errors->any())

                        <div class="container">
                            <div
                                class="alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                            @foreach ($errors->all() as $error)
                                {{ $error }} 
                            @endforeach
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            </div>
                        </div>
                        
                    @endif

                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
                        Alterar senha
                    </h1>
                    <p class="col-lg-10 fs-4">
                        A palavra-passe deve conter mais de 8 carateres, 
                        letras maiúsculas e minúsculas, números e caracteres não alfa-numéricos.
                    </p>
                </div>
                <div class="col-md-6 themed-grid-col">
                    <div>
                        <div class="bd-example-snippet bd-code-snippet">
                            <div class="bd-example m-0 border-0">
                                <form action="/salvar" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="floatingPassword"
                                        placeholder="Nova palavra-passe"
                                        required
                                        />
                                        <label for="floatingPassword">Nova palavra-passe*</label>
                                    </div>
                                    
                                    <div class="form-floating">
                                        <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="floatingPassword"
                                        placeholder="Repetir palavra-passe"
                                        required
                                        />
                                        <label for="floatingPassword">Repetir palavra-passe*</label>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Actualizar
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection