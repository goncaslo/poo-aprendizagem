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
        output.srcdoc = `<pre style='color: #00ff00; font-size:15px; padding:10px;'>${code.replace(/</g, "&lt;").replace(/>/g, "&gt;")}</pre>`;
    });
}
</script>

    <script src="darkmode.js"></script>
</body>
</html>

<div class="quiz">
  <h2>Quiz — Polimorfismo</h2>

  <p><b>1.</b> O que significa polimorfismo?</p>
  <button onclick="checkAnswer(1, true)">Capacidade de um método ter várias formas</button>
  <button onclick="checkAnswer(1, false)">Criar múltiplas classes</button>
  <p id="feedback1" class="feedback"></p>

  <p><b>2.</b> O polimorfismo permite que...</p>
  <button onclick="checkAnswer(2, true)">Classes diferentes tenham métodos com o mesmo nome</button>
  <button onclick="checkAnswer(2, false)">Uma classe tenha apenas um método</button>
  <p id="feedback2" class="feedback"></p>

  <p><b>3.</b> Qual é o benefício do polimorfismo?</p>
  <button onclick="checkAnswer(3, true)">Facilita a reutilização e extensibilidade do código</button>
  <button onclick="checkAnswer(3, false)">Elimina a herança</button>
  <p id="feedback3" class="feedback"></p>
</div>

<script>
function checkAnswer(question, correct) {
    const feedback = document.getElementById(`feedback${question}`);
    if (correct) {
        feedback.innerText = "✅ Correto!";
        feedback.style.color = "#00ff00";
    } else {
        feedback.innerText = "❌ Errado, tenta outra vez!";
        feedback.style.color = "red";
    }
}
</script>

<div class="editor-box">
  <h2>Experimenta: Polimorfismo em Ação</h2>
  <div id="editor4">// Exemplo: classes com o mesmo método
class Forma {
    public function desenhar() {
        echo "Desenhar uma forma";
    }
}

class Circulo extends Forma {
    public function desenhar() {
        echo "Desenhar um círculo";
    }
}

class Quadrado extends Forma {
    public function desenhar() {
        echo "Desenhar um quadrado";
    }
}

$formas = [new Circulo(), new Quadrado()];
foreach ($formas as $f) {
    $f->desenhar();
    echo "<br>";
}
</div>
  <button class="run-btn" id="run-editor4">Executar</button>
  <iframe id="output-editor4"></iframe>
</div>

<script>initEditor("editor4", document.getElementById("editor4").textContent);</script>

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
