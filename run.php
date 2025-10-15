<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'] ?? '';
    
    // Prevenir uso de funções perigosas
    $proibido = ['system', 'exec', 'shell_exec', 'passthru', 'eval', 'unlink', 'fopen', 'file_get_contents'];
    foreach ($proibido as $func) {
        if (stripos($codigo, $func) !== false) {
            die("⚠️ Comando não permitido por segurança.");
        }
    }

    // Cria um ficheiro temporário
    $tempFile = tempnam(sys_get_temp_dir(), 'usercode_') . '.php';
    file_put_contents($tempFile, "<?php\n" . $codigo);

    // Executa o código e captura o output
    ob_start();
    include($tempFile);
    $output = ob_get_clean();

    // Apaga o ficheiro temporário
    unlink($tempFile);

    echo $output;
}
?>
