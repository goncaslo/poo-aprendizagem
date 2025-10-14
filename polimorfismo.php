<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Polimorfismo — POO em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <h2>💻 POO em PHP</h2>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="classeobjeto.php">Classe e Objeto</a></li>
            <li><a href="heranca.php">Herança</a></li>
            <li><a href="polimorfismo.php" class="active">Polimorfismo</a></li>
            <li><a href="encapsulamento.php">Encapsulamento</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>🔄 Polimorfismo</h1>

    <p>
        <strong>Polimorfismo</strong> significa «muitas formas»: permite que diferentes classes respondam de forma distinta ao mesmo método.
        É normalmente usado em conjunto com interfaces ou classes base (herança).
    </p>

    <h2>Porque é útil</h2>
    <p>Permite escrever código genérico que funciona com diferentes tipos de objectos, desde que implementem a mesma interface/método.</p>

    <h2>Exemplo prático</h2>
    <div class="code-box">
<pre><code>// classe base
abstract class Forma {
    // definimos um método abstrato — obriga as subclasses a implementarem
    abstract public function area();
}

// Quadrado implementa area()
class Quadrado extends Forma {
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function area() {
        return $this->lado * $this->lado;
    }
}

// Circulo implementa area()
class Circulo extends Forma {
    private $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function area() {
        return pi() * pow($this->raio, 2);
    }
}

// Uso polimórfico: tratamos diferentes formas da mesma maneira
$formas = [new Quadrado(4), new Circulo(3)];

foreach ($formas as $f) {
    echo "Área: " . round($f->area(), 2) . "&lt;br&gt;";
}
</code></pre>
    </div>

    <div class="output">
        <h3>Resultado:</h3>
        <div class="result">
            <?php
            // Implementação executável
            abstract class Forma {
                abstract public function area();
            }

            class Quadrado extends Forma {
                private $lado;
                public function __construct($lado) { $this->lado = $lado; }
                public function area() { return $this->lado * $this->lado; }
            }

            class Circulo extends Forma {
                private $raio;
                public function __construct($raio) { $this->raio = $raio; }
                public function area() { return pi() * pow($this->raio, 2); }
            }

            $formas = [new Quadrado(4), new Circulo(3)];

            foreach ($formas as $f) {
                echo "Área: " . round($f->area(), 2) . "<br>";
            }
            ?>
        </div>
    </div>

    <h2>Resumo</h2>
    <ul class="topics">
        <li>Permite tratar objectos diferentes de forma uniforme;</li>
        <li>Interfaces e classes abstratas são ferramentas-chave para polimorfismo;</li>
        <li>Melhora a extensibilidade: adiciona novas classes sem alterar a lógica que as consome.</li>
    </ul>
</main>

<footer>
    <p>POO — Polimorfismo</p>
</footer>

</body>
</html>
