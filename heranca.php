<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Herança — POO em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <h2>💻 POO em PHP</h2>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="classeobjeto.php">Classe e Objeto</a></li>
            <li><a href="heranca.php" class="active">Herança</a></li>
            <li><a href="polimorfismo.php">Polimorfismo</a></li>
            <li><a href="encapsulamento.php">Encapsulamento</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>🐾 Herança</h1>

    <p>
        A <strong>herança</strong> permite que uma classe (denominada <em>classe filha</em>) reutilize atributos e métodos de outra (a <em>classe pai</em>).
        Serve para evitar duplicação e para criar hierarquias lógicas.
    </p>

    <h2>Quando usar</h2>
    <p>Usa-se herança quando existe uma relação «é-um» entre as entidades (por exemplo, um Cão é-um Animal).</p>

    <h2>Exemplo comentado</h2>
    <div class="code-box">
<pre><code>// classe base (pai)
class Animal {
    protected $nome;

    public function __construct($nome = "") {
        $this->nome = $nome;
    }

    // método genérico
    public function falar() {
        return "Som genérico...";
    }

    public function getNome() {
        return $this->nome;
    }
}

// classe filha que estende (herda) Animal
class Cao extends Animal {
    // override do método falar
    public function falar() {
        return "Au au!";
    }
}

// outra classe filha
class Gato extends Animal {
    public function falar() {
        return "Miau!";
    }
}

$cao = new Cao("Rex");
$gato = new Gato("Mia");

echo $cao->getNome() . " diz: " . $cao->falar();
echo "&lt;br&gt;";
echo $gato->getNome() . " diz: " . $gato->falar();
</code></pre>
    </div>

    <div class="output">
        <h3>Resultado:</h3>
        <div class="result">
            <?php
            // Implementação executável
            class Animal {
                protected $nome;

                public function __construct($nome = "") {
                    $this->nome = $nome;
                }

                public function falar() {
                    return "Som genérico...";
                }

                public function getNome() {
                    return $this->nome;
                }
            }

            class Cao extends Animal {
                public function falar() { return "Au au!"; }
            }

            class Gato extends Animal {
                public function falar() { return "Miau!"; }
            }

            $cao = new Cao("Rex");
            $gato = new Gato("Mia");

            echo $cao->getNome() . " diz: " . $cao->falar() . "<br>";
            echo $gato->getNome() . " diz: " . $gato->falar();
            ?>
        </div>
    </div>

    <h2>Notas e boas práticas</h2>
    <ul class="topics">
        <li>Evitar heranças profundas — hierarquias muito longas tornam o código difícil de manter;</li>
        <li>Se várias classes partilham comportamento mas não têm relação clara «é-um», usar composição em vez de herança;</li>
        <li>Usar <code>parent::metodo()</code> para chamar métodos do pai, quando necessário.</li>
    </ul>
</main>

<footer>
    <p>POO — Herança</p>
</footer>

</body>
</html>
