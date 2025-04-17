<?php
// conversor.php

function celsiusParaFahrenheit($valor) {
    return ($valor * 9 / 5) + 32;
}

function celsiusParaKelvin($valor) {
    return $valor + 273.15;
}

function fahrenheitParaCelsius($valor) {
    return ($valor - 32) * 5 / 9;
}

function kelvinParaCelsius($valor) {
    return $valor - 273.15;
}

function processarConversao($valor, $origem, $destino) {
    require_once 'conversor.php';

    // Primeiro teste: se dados estão válidos
    if (!is_numeric($valor) || $origem === $destino) {
        return "Erro: dados inválidos ou conversão redundante.";
    }

    $valorCelsius = $valor; // ponto de partida

    // Converte para celsius se necessário 
    switch ($origem) {
        case 'fahrenheit':
            $valorCelsius = fahrenheitParaCelsius($valor);
            break;
        case 'kelvin':
            $valorCelsius = kelvinParaCelsius($valor);
            break;
        case 'celsius':
            // já está em Celsius
            break;
        default:
            return "Erro: unidade de origem desconhecida.";
    }

    // Segundo teste: resultado correto da conversão
    switch ($destino) {
        case 'celsius':
            return round($valorCelsius, 2);
        case 'fahrenheit':
            return round(celsiusParaFahrenheit($valorCelsius), 2);
        case 'kelvin':
            return round(celsiusParaKelvin($valorCelsius), 2);
        default:
            return "Erro: unidade de destino desconhecida.";
    }
}
