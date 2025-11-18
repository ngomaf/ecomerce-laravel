Aqui vai um guia simples e completo para criar um **Seeder** que gera vários usuários no Laravel (funciona também no Laravel 12):

---

# ✅ **1. Criar o Seeder**

No terminal, execute:

```bash
php artisan make:seeder UserSeeder
```

Isso cria o arquivo:
`database/seeders/UserSeeder.php`

---

# ✅ **2. Editar o Seeder para criar vários usuários**

### **Exemplo 1: Criar usuários manualmente**

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'João Silva',
                'email' => 'joao@example.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'password' => Hash::make('123456'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
```

---

### **Exemplo 2: Criar vários usuários usando Factory**

Se quiser gerar automaticamente:

```php
public function run(): void
{
    \App\Models\User::factory(10)->create();
}
```

---

# ✅ **3. Registrar o Seeder no DatabaseSeeder**

Abra `database/seeders/DatabaseSeeder.php` e adicione:

```php
public function run(): void
{
    $this->call([
        UserSeeder::class,
    ]);
}
```

---

# ✅ **4. Rodar o Seeder**

```bash
php artisan db:seed
```

Ou para rodar apenas o `UserSeeder`:

```bash
php artisan db:seed --class=UserSeeder
```
