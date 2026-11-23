<?php

function converterCelsiusParaFahrenheit($celsius)
{
    $temperatura = $celsius * 9;
    $temperatura = $temperatura / 5;
    $temperatura = $temperatura + 32;

    return $temperatura;
}

function converterFahrenheitParaCelsius($fahrenheit)
{
    $temperatura = $fahrenheit - 32;
    $temperatura = $temperatura * 5;
    $temperatura = $temperatura / 9;

    return $temperatura;
}

function obterResultadoConversao($valor, $escalaOrigem, $escalaDestino)
{
    if ($escalaOrigem === 'celsius' && $escalaDestino === 'fahrenheit') {
        return converterCelsiusParaFahrenheit($valor);
    }

    if ($escalaOrigem === 'fahrenheit' && $escalaDestino === 'celsius') {
        return converterFahrenheitParaCelsius($valor);
    }

    return $valor;
}
