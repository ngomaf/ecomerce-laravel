Para criar **links** para rotas **resource** no Laravel, você precisa conhecer a convenção de nomes que o `Route::resource()` gera automaticamente.

Vou explicar **como criar**, **como usar**, e dar **exemplos práticos**.

---

1. Rotas geradas por `Route::resource()`

Se você tiver isto no `routes/web.php`:

```php
Route::resource('products', ProductController::class);
```

Laravel gera automaticamente estes nomes de rotas:

| Ação    | Método    | URI                      | Nome da Rota     |
| ------- | --------- | ------------------------ | ---------------- |
| index   | GET       | /products                | products.index   |
| create  | GET       | /products/create         | products.create  |
| store   | POST      | /products                | products.store   |
| show    | GET       | /products/{product}      | products.show    |
| edit    | GET       | /products/{product}/edit | products.edit    |
| update  | PUT/PATCH | /products/{product}      | products.update  |
| destroy | DELETE    | /products/{product}      | products.destroy |

---

2. Criando links no Blade

**Index**

```blade
<a href="{{ route('products.index') }}">Listar Produtos</a>
```

**Create**

```blade
<a href="{{ route('products.create') }}">Criar Produto</a>
```

**Show**

```blade
<a href="{{ route('products.show', $product->id) }}">Ver Produto</a>
```

**Edit**

```blade
<a href="{{ route('products.edit', $product->id) }}">Editar Produto</a>
```

---

3. Formulários com rotas resource

**Store**

```blade
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    ...
</form>
```

**Update**

```blade
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    ...
</form>
```

**Destroy**

```blade
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>
```

---

4. Como verificar os nomes das rotas

Rode no terminal:

```bash
php artisan route:list
```

---

# Exemplo completo

```blade
<a href="{{ route('products.index') }}">Todos</a>
<a href="{{ route('products.create') }}">Novo</a>

@foreach ($products as $product)
    <p>{{ $product->name }}</p>

    <a href="{{ route('products.show', $product) }}">Ver</a>
    <a href="{{ route('products.edit', $product) }}">Editar</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Apagar</button>
    </form>
@endforeach
```
