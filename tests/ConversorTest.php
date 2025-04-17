<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../conversor.php';

class ConversorTest extends TestCase
{
     public function testCelsiusParaFahrenheit()
     {
          $this->assertEquals(32, celsiusParaFahrenheit(0));
          $this->assertEquals(212, celsiusParaFahrenheit(100));
     }

     public function testCelsiusParaKelvin()
     {
          $this->assertEquals(273.15, celsiusParaKelvin(0));
          $this->assertEquals(373.15, celsiusParaKelvin(100));
     }

     public function testFahrenheitParaCelsius()
     {
          $this->assertEquals(0, fahrenheitParaCelsius(32));
          $this->assertEquals(100, fahrenheitParaCelsius(212));
     }

     public function testKelvinParaCelsius()
     {
          $this->assertEquals(0, kelvinParaCelsius(273.15));
          $this->assertEquals(100, kelvinParaCelsius(373.15));
     }

     public function testProcessarConversao()
     {
          // Teste de conversão válida
          $this->assertEquals(32, processarConversao(0, 'celsius', 'fahrenheit'));
          $this->assertEquals(273.15, processarConversao(0, 'celsius', 'kelvin'));
          $this->assertEquals(0, processarConversao(32, 'fahrenheit', 'celsius'));
          $this->assertEquals(0, processarConversao(273.15, 'kelvin', 'celsius'));

          // Teste de conversão redundante
          $this->assertEquals("Erro: dados inválidos ou conversão redundante.", processarConversao(0, 'celsius', 'celsius'));

          // Teste de unidade de origem desconhecida
          $this->assertEquals("Erro: unidade de origem desconhecida.", processarConversao(0, 'unknown', 'celsius'));

          // Teste de unidade de destino desconhecida
          $this->assertEquals("Erro: unidade de destino desconhecida.", processarConversao(0, 'celsius', 'unknown'));

          // Teste de valor inválido
          $this->assertEquals("Erro: dados inválidos ou conversão redundante.", processarConversao('invalid', 'celsius', 'fahrenheit'));
     }
}