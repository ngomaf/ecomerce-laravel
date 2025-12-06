@extends('layout')
@section('title', "{$user->firstName} {$user->middleEndLastName} - editar - Utilizador")
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
                        Actualizar contar
                    </h1>
                    <p class="col-lg-10 fs-4">
                        Below is an example form built entirely with Bootstrap’s form
                        controls. 
                    </p>
                </div>
                <div class="col-md-6 themed-grid-col">
                    <div>
                        <div class="bd-example-snippet bd-code-snippet">
                            <div class="bd-example m-0 border-0">
                                <form action="/salvar" method="post">
                                    @csrf                                    
                                    <div class="row">
                                        <div class="col-md-4 themed-grid-col">
                                            <div class="form-floating mb-3">
                                                <input
                                                type="text"
                                                name="firstName"
                                                value="{{ $user->firstName }}"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Nome"
                                                required
                                                />
                                                <label for="floatingInput">Nome*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 themed-grid-col">
                                            <div class="form-floating mb-3">
                                                <input
                                                type="text"
                                                name="middleEndLastName"
                                                value="{{ $user->middleEndLastName }}"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Nomes do meio e sobrenome"
                                                required
                                                />
                                                <label for="floatingInput">Nomes do meio e sobrenome*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input
                                        type="email"
                                        name="email"
                                        value="{{ $user->email }}"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="Endereço de e-mail"
                                        required
                                        />
                                        <label for="floatingInput">Endereço de e-mail*</label>
                                    </div>
                                    <div class="mb-3">
                                        <select
                                            class="form-select form-select-lg"
                                            aria-label=".form-select-lg example"
                                            name="cities[]" multiple
                                            size="5"
                                        >
                                            <option value="" selected disabled>Selecione as cidades</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating">
                                        <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="floatingPassword"
                                        placeholder="Palavra-passe"
                                        required
                                        />
                                        <label for="floatingPassword">Palavra-passe*</label>
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