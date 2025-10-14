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

</body>
</html>
