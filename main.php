<?php
include 'includes/funcoesTemperatura.inc.php';

$mensagem = '';

$valor = $_POST['temperatura'];
$escalaOrigem = $_POST['escalaOrigem'];
$escalaDestino = $_POST['escalaDestino'];

$resultado = obterResultadoConversao($valor, $escalaOrigem, $escalaDestino);
$mensagem = 'Resultado: ' . number_format($resultado, 2, ',', '.') . '° ' . strtoupper($escalaDestino);
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da conversão</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <p class="message"><?= $mensagem; ?></p>

        <p>
            <a class="link" href="index.html">Voltar ao formulário</a>
        </p>
    </main>
</body>

</html>
