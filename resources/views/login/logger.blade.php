@extends('layout')
@section('title', 'Entrar')
@section('content')
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">

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
                    Centro para vericar e autencar utilizadores
                    </h1>
                    <p class="col-lg-10 fs-4">
                    Below is an example form built entirely with Bootstrap’s form
                    controls. Each required form group has a validation state that can
                    be triggered by attempting to submit the form without completing
                    it.
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form action="/auth" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                        @csrf
                        <div class="form-floating mb-3">
                            <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                            autofocus
                            required
                            />
                            <label for="floatingInput">Endereço de e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                            type="password"
                            name="password"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="Password"
                            required
                            />
                            <label for="floatingPassword">Palavra-passe</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" name="remember" value="remember-me" /> Lembrar de mim
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">
                            Entrar
                        </button>
                        <hr class="my-4" />
                        <small class="text-body-secondary">Entrando, concordas com os termos de uso.</small>
                    </form>
                </div>
            </div>
        </div>
@endsection