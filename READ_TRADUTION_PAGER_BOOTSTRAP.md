Essa frase:

**“Showing 1 to 9 of 30 results”**

**NÃO é traduzida pelo arquivo `lang/pagination.php`**.
Essa frase vem diretamente do **template de paginação** (`pagination::bootstrap-5`).
Por isso não aparece nos arquivos de idioma.

**Para traduzir**, você precisa **publicar o template de paginação e editar o HTML**.

---

**1) Publicar o template de paginação**

Use:

```bash
php artisan vendor:publish --tag=laravel-pagination
```

Isso cria:

```
resources/views/vendor/pagination/bootstrap-5.blade.php
```

---

**2) Abrir e editar o arquivo**

Abra:

```
resources/views/vendor/pagination/bootstrap-5.blade.php
```

Procure esta parte (Laravel 10/11/12):

```blade
<p class="small text-muted">
    Showing
    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
    to
    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
    of
    <span class="fw-semibold">{{ $paginator->total() }}</span>
    results
</p>
```

---

**3) Traduza para português**

Substitua por:

```blade
<p class="small text-muted">
    A mostrar
    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
    até
    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
    de
    <span class="fw-semibold">{{ $paginator->total() }}</span>
    resultados
</p>
```

Ou mais natural em pt/PT ou pt_AO:

```blade
<p class="small text-muted">
    A mostrar
    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
    a
    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
    de um total de
    <span class="fw-semibold">{{ $paginator->total() }}</span>
    resultados
</p>
```

---

**Pronto!**

Agora qualquer linha como:

```php
$products->links('pagination::bootstrap-5')
```

vai usar **o template traduzido**.