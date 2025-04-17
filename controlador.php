<?php
// controlador.php

require_once 'conversor.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura os dados do formulário
    $valor = isset($_POST['valor']) ? floatval($_POST['valor']) : null;
    $tipoAtual = isset($_POST['tipo_atual']) ? $_POST['tipo_atual'] : null;
    $tipoDestino = isset($_POST['tipo_destino']) ? $_POST['tipo_destino'] : null;

    // Verifica se todos os campos estão preenchidos 
    if ($valor === null || $tipoAtual === null || $tipoDestino === null) {
        $resultado = "Erro: Preencha todos os campos.";
    } else {
        // Realiza a conversão
        $resultado = processarConversao($valor, $tipoAtual, $tipoDestino);
    }

    // Exibe ou redireciona com o resultado
    echo json_encode([
        'resultado' => $resultado
    ]);
} else {
    echo json_encode([
        'erro' => 'Requisição inválida.'
    ]);
}
