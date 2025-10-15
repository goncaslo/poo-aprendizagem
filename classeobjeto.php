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

<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script>
function initEditor(editorId, defaultCode) {
    const editor = ace.edit(editorId);
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/php");
    editor.setValue(defaultCode.trim(), 1);

    const output = document.getElementById("output-" + editorId);

    document.getElementById("run-" + editorId).addEventListener("click", function() {
        const code = editor.getValue();
        output.srcdoc = `<pre style='color:#0f0; font-size:15px; padding:10px;'>${code.replace(/</g, "&lt;").replace(/>/g, "&gt;")}</pre>`;
    });
}
</script>

</body>
</html>

<div class="quiz">
  <h2>Quiz — Classes e Objetos</h2>

  <p><b>1.</b> O que é uma classe?</p>
  <button onclick="checkAnswer(1, true)">Um modelo para criar objetos</button>
  <button onclick="checkAnswer(1, false)">Um tipo de variável</button>
  <p id="feedback1" class="feedback"></p>

  <p><b>2.</b> O que é um objeto?</p>
  <button onclick="checkAnswer(2, true)">Uma instância de uma classe</button>
  <button onclick="checkAnswer(2, false)">Um ficheiro PHP</button>
  <p id="feedback2" class="feedback"></p>

  <p><b>3.</b> O que uma classe pode conter?</p>
  <button onclick="checkAnswer(3, true)">Propriedades e métodos</button>
  <button onclick="checkAnswer(3, false)">Apenas números</button>
  <p id="feedback3" class="feedback"></p>
</div>

<script>
function checkAnswer(question, correct) {
    const feedback = document.getElementById(`feedback${question}`);
    if (correct) {
        feedback.innerText = "✅ Correto!";
        feedback.style.color = "green";
    } else {
        feedback.innerText = "❌ Errado, tenta outra vez!";
        feedback.style.color = "red";
    }
}
</script>

<div class="editor-box">
  <h2>Experimenta: Criar uma Classe e um Objeto</h2>
  <div id="editor1">// Exemplo: define uma classe Carro e cria um objeto
class Carro {
    public $marca = "Toyota";
    public $cor = "Vermelho";
}

$meuCarro = new Carro();
echo "Marca: " . $meuCarro->marca;
</div>
  <button class="run-btn" id="run-editor1">Executar</button>
  <iframe id="output-editor1"></iframe>
</div>

<script>initEditor("editor1", document.getElementById("editor1").textContent);</script>

<div class="editor-container">
<h2>💻 Testa o teu código PHP</h2>
    <textarea id="code" placeholder="Escreve aqui o teu código PHP..."></textarea>
    <button id="runBtn">Executar</button>
    <iframe id="result"></iframe>
</div>

<script>
document.getElementById("runBtn").addEventListener("click", async () => {
    const code = document.getElementById("code").value;

    const response = await fetch("run.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "codigo=" + encodeURIComponent(code)
    });

    const result = await response.text();
    const iframe = document.getElementById("result");
    iframe.srcdoc = "<body style='font-family: Arial; color:#003366; background:white; padding:10px;'>" + result + "</body>";
});
</script>
