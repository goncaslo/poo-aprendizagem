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
  <h2>Quiz — Herança</h2>

  <p><b>1.</b> O que é herança?</p>
  <button onclick="checkAnswer(1, true)">Quando uma classe deriva de outra</button>
  <button onclick="checkAnswer(1, false)">Quando uma classe cria objetos</button>
  <p id="feedback1" class="feedback"></p>

  <p><b>2.</b> Qual palavra-chave define herança em PHP?</p>
  <button onclick="checkAnswer(2, true)">extends</button>
  <button onclick="checkAnswer(2, false)">inherits</button>
  <p id="feedback2" class="feedback"></p>

  <p><b>3.</b> Que vantagem traz a herança?</p>
  <button onclick="checkAnswer(3, true)">Reutilização de código e organização</button>
  <button onclick="checkAnswer(3, false)">Reduz o número de classes</button>
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
  <h2>Experimenta: Herança entre Classes</h2>
  <div id="editor3">// Exemplo: classe Animal herdada por Cachorro
class Animal {
    public function som() {
        echo "O animal faz um som";
    }
}

class Cachorro extends Animal {
    public function som() {
        echo "O cachorro late!";
    }
}

$dog = new Cachorro();
$dog->som();
</div>
  <button class="run-btn" id="run-editor3">Executar</button>
  <iframe id="output-editor3"></iframe>
</div>

<script>initEditor("editor3", document.getElementById("editor3").textContent);</script>

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
    const isDarkMode = document.documentElement.getAttribute('data-theme') === 'dark';
    if (isDarkMode) {
        iframe.srcdoc = "<body style='font-family: Arial; color:#ffffff; background:black; padding:10px;'>" + result + "</body>";
    }
    else {
        iframe.srcdoc = "<body style='font-family: Arial; color:#003366; background:white; padding:10px;'>" + result + "</body>";
    }
});
</script>
