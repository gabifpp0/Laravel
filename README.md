# PHP - Laravel

 Inicio ao estudo da linguagem PHP e desenvolvimento web com Laravel

## Básico do Framework
O framework usa a arquitetura MVC. O controller gerencia os modelos(Lógica de negócios e gerenciador do banco de dados) e as views(Interface gráfica e exibição de dados).

    Model --> app/models
    View --> resources/views/
    Controller --> app/Http/Controllers

## Configurações
    PHP 8.2
    Composer 

Criação do projeto 
- compose create-project laravel/laravel nome do projeto

Salvando alterações no banco de dados
- php artisan migrate

Rodando o projeto
- php atisan key:generate
- php artisan serve

Extensões --> php -m 

Rotas
```php

routes/web.php

```
   
## Sintaxe do PHP
 
Declarando variáveis

```php

$oi = 'oi'

```

Vairiável da variável?

```php

$nome = 'Guilherme';

$Guilherme = 'Bla bla!';

echo 'O meu nome é '.$nome;
// Imprime O meu nome é Guilherme

echo 'O meu nome é '.$$nome;
// Imprime O meu nome é Bla bla!


```

Print

```php

echo 'Oi, tudo bem?'.$oi;

```

Condicionais 

```php

if ($nome == 'Guilherme'){
    echo 'Verdadeiro';
}else{
    echo 'Falso';
}

// == Compara valores
// === Compara valores com tipos iguais

$idade = '26';

// Irá retornar verdadeiro pois possuem valores iguais
if ($idade == 26){
    echo 'Verdadeiro';
}else{
    echo 'Falso';
}

// Irá retornar falso pois possue valores iguais, mas com tipos diferentes
if ($idade === 26){
    echo 'Verdadeiro';
}else{
    echo 'Falso';
}
```

Looping

```php

for ($i =0; $i <= 30; $i++){
    echo $i;
    echo '<hr>';
}

$i = 0;

while ($i < 10){
    echo $i;

    $i++;
}

```

Classes 

```php

class Pessoa{

    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function printNomeEIdade(){
        echo $this->nome;
        echo $this->idade;
    }
}

//Instânciando

$pessoa = new Pessoa('Gabrielle', '20');

$pessoa->printNomeEIdade();

```

## Docker e ambientes

    docker-compose up -d --> "Levantar" as aplicações

    docker ps --> Detalhar todos os processos

### Sail 

(Tem que ser executado no bash do WSL)

Instalando

```php

php artisan sail:install

```

Construindo o container

```php

./vendor/bin/sail up

```
Ativando
```php

./vendor/bin/sail up -d

```
Desativando
```php

./vendor/bin/sail down

```

Migrate
```php

./vendor/bin/sail artisan migrate

```

Alias
```php

alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'

```

# env

