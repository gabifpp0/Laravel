# PHP - Laravel

 Inicio ao estudo da linguagem PHP e desenvolvimento web com Laravel

## Básico da linguagem

## Configurações

## Sintaxe

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