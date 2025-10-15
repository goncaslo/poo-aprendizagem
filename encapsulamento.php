<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Encapsulamento — POO em PHP</title>
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
            <li><a href="polimorfismo.php">Polimorfismo</a></li>
            <li><a href="encapsulamento.php" class="active">Encapsulamento</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>🔒 Encapsulamento</h1>

    <p>
        <strong>Encapsulamento</strong> é o princípio de esconder (ou proteger) o estado interno de um objecto,
        expondo apenas o necessário através de métodos públicos (getters/setters ou métodos de negócio).
    </p>

    <h2>Modificadores de acesso</h2>
    <ul class="topics">
        <li><strong>public</strong> — acessível desde qualquer lugar;</li>
        <li><strong>protected</strong> — acessível na classe e nas suas subclasses;</li>
        <li><strong>private</strong> — acessível apenas dentro da própria classe.</li>
    </ul>

    <h2>Exemplo detalhado</h2>
    <div class="code-box">
<pre><code>class ContaBancaria {
    // saldo é privado: só a classe controla alterações
    private $saldo = 0;

    // depositar: valida e altera o saldo
    public function depositar($valor) {
        if (!is_numeric($valor) || $valor <= 0) {
            throw new InvalidArgumentException("Valor inválido para depósito.");
        }
        $this->saldo += $valor;
    }

    // levantar: valida e altera o saldo
    public function levantar($valor) {
        if (!is_numeric($valor) || $valor <= 0) {
            throw new InvalidArgumentException("Valor inválido para levantamento.");
        }
        if ($valor > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente.");
        }
        $this->saldo -= $valor;
    }

    // getter para consultar saldo (não permite alterar)
    public function obterSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria();
$conta->depositar(150);
$conta->levantar(40);
echo "Saldo atual: R$ " . $conta->obterSaldo();
</code></pre>
    </div>

    <div class="output">
        <h3>Resultado:</h3>
        <div class="result">
            <?php
            // Implementação executável (com controlo de erros simples)
            class ContaBancaria {
                private $saldo = 0;

                public function depositar($valor) {
                    if (!is_numeric($valor) || $valor <= 0) {
                        throw new InvalidArgumentException("Valor inválido para depósito.");
                    }
                    $this->saldo += $valor;
                }

                public function levantar($valor) {
                    if (!is_numeric($valor) || $valor <= 0) {
                        throw new InvalidArgumentException("Valor inválido para levantamento.");
                    }
                    if ($valor > $this->saldo) {
                        throw new RuntimeException("Saldo insuficiente.");
                    }
                    $this->saldo -= $valor;
                }

                public function obterSaldo() {
                    return $this->saldo;
                }
            }

            try {
                $conta = new ContaBancaria();
                $conta->depositar(150);
                $conta->levantar(40);
                echo "Saldo atual: R$ " . $conta->obterSaldo();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
            ?>
        </div>
    </div>

    <h2>Resumo e vantagens</h2>
    <ul class="topics">
        <li>Protege o estado interno do objecto contra alterações inválidas;</li>
        <li>Centraliza regras de validação (por ex., depósitos e levantamentos) na própria classe;</li>
        <li>Facilita debugging e manutenção porque o acesso está controlado.</li>
    </ul>
</main>

<footer>
    <p>POO — Encapsulamento</p>
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
  <h2>Quiz — Encapsulamento</h2>

  <p><b>1.</b> Qual é o objetivo do encapsulamento?</p>
  <button onclick="checkAnswer(1, true)">Proteger os dados dentro da classe</button>
  <button onclick="checkAnswer(1, false)">Permitir o acesso direto a tudo</button>
  <p id="feedback1" class="feedback"></p>

  <p><b>2.</b> Que palavras-chave controlam o acesso aos atributos?</p>
  <button onclick="checkAnswer(2, true)">public, private, protected</button>
  <button onclick="checkAnswer(2, false)">get, set, call</button>
  <p id="feedback2" class="feedback"></p>

  <p><b>3.</b> Como se acede a um atributo privado?</p>
  <button onclick="checkAnswer(3, true)">Através de métodos getter e setter</button>
  <button onclick="checkAnswer(3, false)">Através de echo diretamente</button>
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
  <h2>Experimenta: Encapsulamento e Métodos Getter/Setter</h2>
  <div id="editor2">// Exemplo: controlar o acesso a um atributo
class Pessoa {
    private $nome;

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }
}

$p = new Pessoa();
$p->setNome("Maria");
echo $p->getNome();
</div>
  <button class="run-btn" id="run-editor2">Executar</button>
  <iframe id="output-editor2"></iframe>
</div>

<script>initEditor("editor2", document.getElementById("editor2").textContent);</script>

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
