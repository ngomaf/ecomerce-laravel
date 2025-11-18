Esses três campos do `.env` servem para **idioma da aplicação**, **idioma de fallback** e **idioma dos dados falsos (Faker)**.
Vou explicar cada um e mostrar **como preencher para português (Angola) sem novo acordo**.

---

# ✅ 1) `APP_LOCALE`

É o **idioma principal** da tua aplicação.

👉 Para português de Angola, podes colocar:

**Opção 1 — usar apenas `pt` (mais comum e sem problemas):**

```
APP_LOCALE=pt
```

**Opção 2 — usar código próprio (recomendado se vais criar traduções específicas):**

```
APP_LOCALE=pt_AO
```

> Se escolheres `pt_AO`, tens de criar a pasta `resources/lang/pt_AO`.

---

# ✅ 2) `APP_FALLBACK_LOCALE`

É o idioma que será usado **se faltar alguma tradução** no idioma principal.

Também deve ser `pt` ou `pt_AO`:

```
APP_FALLBACK_LOCALE=pt
```

ou

```
APP_FALLBACK_LOCALE=pt_AO
```

---

# ✅ 3) `APP_FAKER_LOCALE`

Define a **localização dos dados gerados pelo Faker**, como:

* nomes
* endereços
* telefones
* textos falsos

Infelizmente, **não existe faker específico para Angola**.
A melhor opção é:

```
APP_FAKER_LOCALE=pt_PT
```

Porque:

* Gera textos em português verdadeiro
* Não usa o novo acordo ortográfico
* Evita palavras típicas do Brasil que não combinam com o público angolano

---

# 📌 Resultado final recomendado (para português de Angola)

Se quiseres traduções completas de Angola (pasta `pt_AO`):

```
APP_LOCALE=pt_AO
APP_FALLBACK_LOCALE=pt_AO
APP_FAKER_LOCALE=pt_PT
```

Se quiseres usar apenas `pt` (mais simples):

```
APP_LOCALE=pt
APP_FALLBACK_LOCALE=pt
APP_FAKER_LOCALE=pt_PT
```
