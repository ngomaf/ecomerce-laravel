Para **mostrar/esconder um bloco no Blade dependendo da rota**, existem várias formas no Laravel. Aqui estão as mais usadas e recomendadas:

---

**1. Usar `request()->routeIs()` (método recomendado)**

```php
@if (request()->routeIs('posts.index'))
    <p>Esta é a página de lista de posts.</p>
@endif
```

### Também funciona com *wildcards*:

```php
@if (request()->routeIs('posts.*'))
    <p>Qualquer rota relacionada a posts.</p>
@endif
```

---

**2. Usar `Route::currentRouteName()`**

```php
@if (Route::currentRouteName() === 'posts.show')
    <p>Você está na página de detalhes.</p>
@endif
```

---

**3. Usar `Route::is()`**

```php
@if (Route::is('admin.*'))
    <p>Rota dentro do painel admin.</p>
@endif
```

---

**4. Verificar pelo path da URL**

```php
@if (Request::is('posts/*'))
    <p>O path começa com /posts/</p>
@endif
```

---

# 🎯 **EXEMPLOS PRÁTICOS**

### Mostrar um botão apenas na rota `posts.index`

```php
@if (request()->routeIs('posts.index'))
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Criar Post</a>
@endif
```

### Mostrar sidebar apenas em rotas `admin.*`

```php
@if (request()->routeIs('admin.*'))
    @include('layouts.admin-sidebar')
@endif
```

### Esconder header no login

```php
@if (!request()->routeIs('login'))
    @include('partials.header')
@endif
```

---

# ⚡ Mais curto e elegante (Blade directive customizada)

Se quiser, posso criar uma *Blade directive* chamada `@route`:

```php
@route('posts.index')
    Conteúdo...
@endroute
```





Perfeito! Vou gerar uma **Blade Directive personalizada** chamada `@route` para que possas usar condições baseadas em rotas de forma simples.

---

# ✅ **1. Criar a Blade Directive (em AppServiceProvider)**

Abra o arquivo:

```
app/Providers/AppServiceProvider.php
```

E dentro do método **boot()**, adiciona isto:

```php
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;

public function boot(): void
{
    Blade::directive('route', function ($route) {
        return "<?php if(request()->routeIs($route)): ?>";
    });

    Blade::directive('endroute', function () {
        return "<?php endif; ?>";
    });
}
```

> ⚠️ Certifica-te que o `boot()` existe; caso contrário eu adapto para Laravel 12.

---

# ✅ **2. Agora podes usar no Blade assim:**

### ✔️ Validar rota exata

```blade
@route('posts.index')
    <h1>Você está na lista de posts</h1>
@endroute
```

### ✔️ Validar qualquer rota com wildcard

```blade
@route('posts.*')
    <p>Qualquer rota relacionada a posts</p>
@endroute
```

### ✔️ Várias rotas ao mesmo tempo

```blade
@route(['posts.index', 'posts.show'])
    <p>Esta mensagem aparece no index ou no show.</p>
@endroute
```

---

# ✅ **3. Quer personalizar ainda mais?**

Posso criar também:

✔️ `@notroute()` → para quando não é uma rota
✔️ `@routeContains()` → para paths
✔️ `@routeStartsWith()` → para prefixes (admin.*, user.*, etc.)
✔️ suporte para múltiplas rotas com lógica OR / AND

---

Se quiser, digo como colocar isto num **Service Provider próprio**, para ficar mais organizado.

