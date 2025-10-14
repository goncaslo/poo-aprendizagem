<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Classe e Objeto — POO em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <h2>💻 POO em PHP</h2>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="classeobjeto.php" class="active">Classe e Objeto</a></li>
            <li><a href="heranca.php">Herança</a></li>
            <li><a href="polimorfismo.php">Polimorfismo</a></li>
            <li><a href="encapsulamento.php">Encapsulamento</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>🧩 Classe e Objeto</h1>

    <p>
        <strong>Classe</strong> — é o molde (blueprint). Descreve quais propriedades e métodos um objecto terá.
        Não ocupa memória até ser instanciada.  
        <strong>Objecto</strong> — é uma instância da classe: a entidade concreta que contém valores.
    </p>

    <h2>Componentes principais</h2>
    <ul class="topics">
        <li><strong>Atributos / propriedades</strong> — dados que caracterizam o objecto (ex.: nome, idade).</li>
        <li><strong>Métodos</strong> — funções que definem o comportamento do objecto (ex.: apresentar()).</li>
        <li><strong>Construtor</strong> — método especial que inicializa o objecto ao criá-lo (<code>__construct</code>).</li>
        <li><strong>$this</strong> — refere-se ao próprio objecto dentro dos seus métodos.</li>
    </ul>

    <h2>Exemplo completo e comentado</h2>
    <div class="code-box">
<pre><code>// definimos a classe Pessoa com propriedades e métodos
class Pessoa {
    // propriedades públicas — acessíveis de fora
    public $nome;
    public $idade;

    // construtor: permite inicializar valores ao criar o objecto
    public function __construct($nome = "", $idade = 0) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // método que devolve uma string de apresentação
    public function apresentar() {
        // $this refere-se ao objecto que chamou o método
        return "Olá, o meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }

    // método que faz o objecto fazer anos
    public function fazerAniversario() {
        $this->idade++;
    }
}

// criamos instâncias da classe Pessoa
$p1 = new Pessoa("Maria", 30);
$p2 = new Pessoa("João", 25);

// usamos métodos dos objectos
$p1->fazerAniversario();
echo $p1->apresentar(); // Maria agora tem 31
echo "&lt;br&gt;";
echo $p2->apresentar();
</code></pre>
    </div>

    <div class="output">
        <h3>Resultado:</h3>
        <div class="result">
            <?php
            // Implementação executável
            class Pessoa {
                public $nome;
                public $idade;

                public function __construct($nome = "", $idade = 0) {
                    $this->nome = $nome;
                    $this->idade = $idade;
                }

                public function apresentar() {
                    return "Olá, o meu nome é {$this->nome} e tenho {$this->idade} anos.";
                }

                public function fazerAniversario() {
                    $this->idade++;
                }
            }

            $p1 = new Pessoa("Maria", 30);
            $p2 = new Pessoa("João", 25);

            $p1->fazerAniversario();
            echo $p1->apresentar() . "<br>";
            echo $p2->apresentar();
            ?>
        </div>
    </div>

    <h2>Boas práticas</h2>
    <ul class="topics">
        <li>Usar nomes claros e sem abreviaturas estranhas;</li>
        <li>Preferir propriedades privadas ou protegidas e expor comportamento por métodos (encapsulamento);</li>
        <li>Isolar responsabilidades — cada classe com uma responsabilidade clara (princípio SRP).</li>
    </ul>
</main>

<footer>
    <p>POO — Classe e Objeto</p>
</footer>

</body>
</html>
