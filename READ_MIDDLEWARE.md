#Laravel 12, o uso de middleware 

---

**1. Criar um Middleware**

Use o Artisan:

```bash
php artisan make:middleware VerificarIdade
```

O arquivo será criado em:

```
app/Http/Middleware/VerificarIdade.php
```

---

**2. Lógica dentro do Middleware**

Exemplo:

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarIdade
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->idade < 18) {
            return redirect('/negado');
        }

        return $next($request);
    }
}
```

---

**3. Registrar o Middleware no Laravel 12**

### ➤ Antes: era em `app/Http/Kernel.php`

### ➤ Agora: é em **bootstrap/app.php**

Abra:

```
bootstrap/app.php
```

E adicione em **->withMiddleware()**:

```php
->withMiddleware(function ($middleware) {
    $middleware->append([
        \App\Http\Middleware\VerificarIdade::class,
    ]);
})
```

Isso o registra como **middleware global**.

---

**4. Registrar como middleware nomeado (para usar em rotas específicas)**

Ainda no `bootstrap/app.php`, use:

```php
->withMiddleware(function ($middleware) {
    $middleware->alias([
        'idade' => \App\Http\Middleware\VerificarIdade::class,
    ]);
})
```

---

**5. Usar middleware nomeado dentro das rotas (Laravel 12)**

As rotas agora são definidas em:

```
routes/web.php
```

Use assim:

```php
Route::get('/area-restrita', function () {
    return "Bem-vindo!";
})->middleware('idade');
```

---

**6. Usar em Route Groups**

```php
Route::middleware(['idade'])->group(function () {
    Route::get('/painel', fn() => 'Painel');
    Route::get('/config', fn() => 'Configurações');
});
```

---

# 🚀 Resumo rápido

| Ação                 | Onde fazer no Laravel 12                      |
| -------------------- | --------------------------------------------- |
| Criar middleware     | `php artisan make:middleware`                 |
| Código do middleware | `app/Http/Middleware/`                        |
| Registrar global     | `bootstrap/app.php` → `$middleware->append()` |
| Registrar nomeado    | `bootstrap/app.php` → `$middleware->alias()`  |
| Usar em rotas        | `->middleware('nome')`                        |


