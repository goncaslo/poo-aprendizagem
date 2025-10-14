<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>POO em PHP — Introdução</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <h2>💻 POO em PHP</h2>
        <ul>
            <li><a href="index.php" class="active">Início</a></li>
            <li><a href="classeobjeto.php">Classe e Objeto</a></li>
            <li><a href="heranca.php">Herança</a></li>
            <li><a href="polimorfismo.php">Polimorfismo</a></li>
            <li><a href="encapsulamento.php">Encapsulamento</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="intro">
        <h1>👋 Bem-vindo ao guia completo de POO (PHP)</h1>

        <p>
            A <strong>Programação Orientada a Objectos (POO)</strong> é um paradigma de programação que organiza o código em torno de
            <strong>objectos</strong>. Cada objecto combina <em>dados</em> (atributos/propriedades) e <em>comportamentos</em> (métodos).
            A ideia é modelar conceitos do mundo real (ou do domínio da aplicação) como classes e instanciá-los como objectos.
        </p>

        <h2>🔎 Visão geral (o que vais aprender)</h2>
        <p>Este mini-curso cobre os conceitos essenciais da POO:</p>
        <ul class="topics">
            <li><strong>Classe e Objeto</strong> — o molde e as instâncias;</li>
            <li><strong>Encapsulamento</strong> — controlar acesso e proteger dados;</li>
            <li><strong>Herança</strong> — reutilizar e especializar código;</li>
            <li><strong>Polimorfismo</strong> — mesma interface, diferentes comportamentos.</li>
        </ul>

        <h2>🧭 Porque convém usar POO?</h2>
        <ul class="topics">
            <li><strong>Organização:</strong> o código fica modular e mais fácil de entender;</li>
            <li><strong>Reutilização:</strong> podes usar e estender classes sem duplicar lógica;</li>
            <li><strong>Manutenção:</strong> alterações tendem a ser localizadas e seguras;</li>
            <li><strong>Modelagem:</strong> facilita representar entidades e regras do domínio.</li>
        </ul>

        <h2>📌 Exemplo simples (rápido)</h2>
        <p>Nota: o exemplo abaixo é intencionalmente simples para mostrar o princípio — cada pagina posterior aprofunda os conceitos.</p>

        <div class="code-box">
<pre><code>// classe que representa um carro
class Carro {
    public $modelo;
    public $velocidade = 0;

    public function acelerar($valor = 10) {
        $this->velocidade += $valor;
    }

    public function travar($valor = 10) {
        $this->velocidade = max(0, $this->velocidade - $valor);
    }
}

$meuCarro = new Carro();
$meuCarro->modelo = "Fusca";
$meuCarro->acelerar();
echo "O {$meuCarro->modelo} está a {$meuCarro->velocidade} km/h.";
</code></pre>
        </div>

        <div class="output">
            <h3>Resultado:</h3>
            <div class="result">
                <?php
                // Exemplo executável
                class Carro {
                    public $modelo;
                    public $velocidade = 0;

                    public function acelerar($valor = 10) {
                        $this->velocidade += $valor;
                    }

                    public function travar($valor = 10) {
                        $this->velocidade = max(0, $this->velocidade - $valor);
                    }
                }

                $meuCarro = new Carro();
                $meuCarro->modelo = "Fusca";
                $meuCarro->acelerar();
                echo "O {$meuCarro->modelo} está a {$meuCarro->velocidade} km/h.";
                ?>
            </div>
        </div>

        <h2>✍️ Recomendações para estudo</h2>
        <ol class="topics">
            <li>Lê cada página (Classe/Encapsulamento/Herança/Polimorfismo) com atenção;</li>
            <li>Experimenta alterar os exemplos e observar a saída;</li>
            <li>Tenta mini-exercícios: criar classes novas, usar herança e aplicar encapsulamento;</li>
            <li>Pratica refactorizar código procedimental para POO.</li>
        </ol>

        <p>Segue para a aba que preferires no menu — cada página contém explicações detalhadas e exemplos comentados.</p>
    </section>
</main>

<footer>
    <p>Aprender POO em PHP — Projecto educativo</p>
</footer>

</body>
</html>
