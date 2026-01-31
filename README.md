# jonas/multiplication-table

Pacote PHP simples para gerar tabuadas matemáticas.  
Criado com o objetivo de demonstrar a criação de **pacotes Composer**, incluindo autoload PSR-4, testes automatizados e versionamento.

---

## Requisitos

- PHP **>= 8.2**
- Composer **>= 2.5**
- Laravel (opcional, apenas para o exemplo com Tinker)

---

## Instalação

Este pacote ainda não está publicado no Packagist.  
Para instalar diretamente a partir do GitHub, registre o repositório VCS:

```bash
composer config repositories.multiplication-table vcs https://github.com/jonas-amilton/multiplication-table.git
```

Em seguida, instale o pacote via Composer:

```bash
composer require jonas/multiplication-table:^1.0
```

---

## Uso básico

```php
use Jonas\MultiplicationTable\MultiplicationTable;

// Gera a tabuada como array
$result = MultiplicationTable::generate(5, 5);

/*
[
  1 => 5,
  2 => 10,
  3 => 15,
  4 => 20,
  5 => 25
]
*/

// Retorna a tabuada formatada
$formatted = MultiplicationTable::format(3, 3);

/*
[
  "3 x 1 = 3",
  "3 x 2 = 6",
  "3 x 3 = 9"
]
*/
```

---

## Testando com Laravel Tinker

Em um projeto Laravel onde o pacote esteja instalado:

```bash
php artisan tinker
```

No console do Tinker:

```php
use Jonas\MultiplicationTable\MultiplicationTable;

MultiplicationTable::generate(4, 4);
```

Resultado esperado:

```php
[
  1 => 4,
  2 => 8,
  3 => 12,
  4 => 16,
]
```

---

## Executando os testes (no repositório do pacote)

Clone o repositório e instale as dependências de desenvolvimento:

```bash
composer install
```

Execute os testes automatizados:

```bash
composer test
```

---

## Estrutura do projeto

```text
multiplication-table/
├── src/
│   └── MultiplicationTable.php
├── tests/
│   └── MultiplicationTableTest.php
├── composer.json
├── composer.lock
├── phpunit.xml
└── README.md
```

---

## Versionamento e release

O pacote segue [**Semantic Versioning**]([URL](https://www.alura.com.br/artigos/versionamento-semantico-breve-introducao?srsltid=AfmBOooYCvHUeo2II6vnstANe4tlMhDqCGYttDGiI2qEWiRT5UJiW4RP)).

Para criar uma nova versão:

```bash
git tag v1.0.0
git push origin v1.0.0
```

---

## Licença

MIT
