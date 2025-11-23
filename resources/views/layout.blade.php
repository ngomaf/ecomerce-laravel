<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('assets/images/fortwork_250.png') }}" rel="icon" type="image/png" />
    <script src="{{ asset('assets/bootstrap5/js/color-modes.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}">
    <link href="{{ asset('assets/bootstrap5/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default.css') }}" rel="stylesheet" />

    {{-- @vite(['resources/css/app.css']) --}}
    <meta name="theme-color" content="#712cf9" />
</head>
<body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        ></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path
          d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
        ></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        ></path>
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        ></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        ></path>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button
        class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        aria-label="Toggle theme (auto)"
      >
        <svg class="bi my-1 theme-icon-active" aria-hidden="true">
          <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul
        class="dropdown-menu dropdown-menu-end shadow"
        aria-labelledby="bd-theme-text"
      >
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="light"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#sun-fill"></use>
            </svg>
            Light
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="dark"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#moon-stars-fill"></use>
            </svg>
            Dark
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center active"
            data-bs-theme-value="auto"
            aria-pressed="true"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#circle-half"></use>
            </svg>
            Auto
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
      </ul>
    </div>

    <div class="navbar-expand-lg navbar-dark bg-dark sticky-top">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="text-white text-decoration-none lara-logo">ELara</a>
          </div>
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2">Home</a></li> {{-- link-secondary --}}
            <li><a href="/produto" class="nav-link px-2">Produtos</a></li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-servicos" href="#" id="dropdownMenu" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Categorias
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  @foreach ($globCats as $category)
                    <li><a class="dropdown-item" href="/produto/categoria/{{ $category->slug }}">{{ $category->name }}</a></li>
                  @endforeach
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Outros</a></li>
                </ul>
            </li>
            <li><a href="/sobre" class="nav-link px-2">Sobre</a></li>
          </ul>
          <div class="col-md-3 text-end">
            @guest
              <a href="/login" type="button" class="btn btn-outline-primary me-2">Entrar</a>
              <a href="/criar" type="button" class="btn btn-primary">Criar</a> &nbsp;
            @endguest
            <a href="/carrinho" class="btn btn-warning"><span style="background: #333" class="badge">{{ \Cart::getContent()->count(); }}</span> <i class="bi bi-cart-fill"></i></a>
            @auth
              &nbsp; <div style="display: inline-block;" class="btn btn-outline-primary me-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-servicos" href="#" id="dropdownMenu" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    {{ auth()->user()->firstName }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <li><a class="dropdown-item" href="/admin/dashboard">Dashboard</a></li>
                    <li><a class="dropdown-item" href="/admin/perfil">Meu perfil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a style="color: #c32525" class="dropdown-item" href="/sair"><i class="bi bi-box-arrow-left"></i> Sair</a></li>
                </ul>
              </div>
            @endauth
          </div>
        </header>
    </div>

    <main>

        @yield('content')
    
    </main>

    {{-- footer --}}
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="/" class="nav-link px-2 text-body-secondary">Home</a>
          </li>
          <li class="nav-item">
            <a href="/produto" class="nav-link px-2 text-body-secondary">Produtos</a>
          </li>
          <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle text-decoration-none"
                href="/categoria"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                Categorias
                </a>
                <ul class="dropdown-menu">
                  @foreach ($globCats as $category)
                    <li><a class="dropdown-item" href="/categoria/{{ $category->slug }}">{{ $category->name }}</a></li>
                  @endforeach
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Acessórios</a></li>
                </ul>
          </li>
          <li class="nav-item">
            <a href="/sobre" class="nav-link px-2 text-body-secondary">sobre</a>
          </li>
        </ul>
        <p class="text-center text-body-secondary">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}, Inc</p>
      </footer>
    </div>
    <script src="{{ asset('assets/bootstrap5/dist/js/bootstrap.bundle.min.js') }}" class="astro-vvvwv3sm"></script>
</body>
</html>