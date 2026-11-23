<?php

function converterCelsiusParaFahrenheit($celsius)
{
    return ($celsius * 9 / 5) + 32;
}

function converterFahrenheitParaCelsius($fahrenheit)
{
    return ($fahrenheit - 32) * 5 / 9;
}

function obterResultadoConversao($valor, $escalaOrigem, $escalaDestino)
{
    if ($escalaOrigem === 'celsius' && $escalaDestino === 'fahrenheit') {
        return converterCelsiusParaFahrenheit((float) $valor);
    }

    if ($escalaOrigem === 'fahrenheit' && $escalaDestino === 'celsius') {
        return converterFahrenheitParaCelsius((float) $valor);
    }

    return (float) $valor;
}

?>
