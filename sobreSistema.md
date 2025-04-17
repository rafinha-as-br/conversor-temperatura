/*       

  ///Lógica do programa:

  //funcionamento básico: O usuário coloca um valor no campo da esquerda, clica em uma dos tipos de temperatura na esquerda, o programa entao guarda esse tipo e valor,
  //passa para o lado direito e espera o usuário clicar para qual tipo de temperatura ele quer converter (obs: na parte direita, o botão que representa a temperatura informada do lado direito estará bloqueado (obviamente para evitar de converter de celsius para celsius por exemplo))

  // Função de verificar (ao clicar em qualquer um dos botões da direita ou em um botão do meio(botão reserva para caso buge o resto) (só vai dar para clicar nos botões da direita após selecionar algum botão da esquerda ou apertar no botão seta do meio) 
    // Ler qual é o tipo de temperatura informada:
      // if botão 1-esquerda estiver ativo: valor que está dentro do input da esquerda é em celsius
      // if botão 2-esquerda estiver ativo: valor que está dentro do input da esquerda é em fahrenheit
      // if botão 3-esquerda estiver ativo: valor que está dentro do input da esquerda é em kelvin
    //primeiro teste: se o campo da esquerda está retornando os dois dados corretamente (valor e tipo da temperatura)
    // ler para qual tipo de temperatura será convertida.
      // if botão 1-direita estiver ativo: Tipo de temperatura a ser convertida é em celsius 
      // if botão 2-direita estiver ativo: Tipo de temperatura a ser convertida é em fahrenheit
      // if botão 3-direita estiver ativo: Tipo de temperatura a ser convertida é em kelvin
    // realiza a função de conversão (uma função que recebe temperatura contendo valor e o tipo (dado1 e dado2) e para qual tipo de temperatura a ser convertida (dado 3))
       switch ($dado3) {
           
          case "celsius":               
            realizar função de converter para celsius recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
            printa o resultado no input direita
            break;

          case "fahrenheit":
              converte primeiro o valor da esquerda para celsius
              realizar função de converter para fahrenheit, recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
              printa o resultado no input direita
              break;

          case "kelvin":
              converte primeiro o valor da esquerda para celsius
              realizar função de converter para kelvin, recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
              printa o resultado no input direita
              break;

        }
    // Segundo teste: Se a conversão foi realizada corretamente
    // se o usuário clicar no botão de reiniciar no meio, volta para o início
    // terceiro teste: Se as variáveis foram todas resetadas e está tudo pronto para uma nova conversão...

    //Para rodar os testes usar : vendor\bin\phpunit --bootstrap vendor\autoload.php tests\ConversorTest.php



  // Testes Unitários Realizados:

  // Os testes foram implementados com PHPUnit no arquivo tests/ConversorTest.php. Cada função principal de conversão e de controle de fluxo foi testada com diferentes cenários, incluindo situações comuns e casos de exceção.

  // Lista de testes:
      // testCelsiusParaFahrenheit: Testa se a conversão de Celsius para Fahrenheit está correta para valores como 0°C e 100°C.
      // testCelsiusParaKelvin: Verifica se a conversão de Celsius para Kelvin está sendo feita corretamente.
      // testFahrenheitParaCelsius: Testa se 32°F e 212°F são convertidos corretamente para Celsius.
      // testKelvinParaCelsius: Verifica a precisão da conversão de Kelvin para Celsius para valores como 273.15K.
      // testProcessarConversao: Testa a função geral de processamento das conversões, incluindo:
          // - Conversões válidas entre unidades diferentes
          // - Conversões inválidas (mesmo tipo de temperatura ou unidade desconhecida)
          // - Entradas com valores não numéricos
      // testEntradasInvalidas: Testa o comportamento do sistema com valores nulos, booleanos e temperaturas extremamente altas ou baixas.
      // testValoresNegativos: Verifica se o sistema lida corretamente com conversões de valores negativos.
      // testPrecisaoDecimal: Garante que valores decimais são processados com precisão nas conversões.
      // testEntradasVazias: Testa o comportamento ao receber strings vazias como entrada.
      // testTiposInesperados: Valida se o sistema trata corretamente dados inesperados como arrays ou objetos.

  // Resultado da execução:
      // Foram executados 10 testes, com um total de 26 asserções.
      // 3 testes falharam (ProcessarConversao, ValoresNegativos e EntradasVazias).

  // Tabela de Resumo dos Testes:

  /*
  +--------------------------+----------------------------------------------------+----------+
  | Nome do Teste           | Descrição                                          | Status   |
  +--------------------------+----------------------------------------------------+----------+
  | testCelsiusParaFahrenheit | Conversão de Celsius para Fahrenheit             | OK       |
  | testCelsiusParaKelvin     | Conversão de Celsius para Kelvin                 | OK       |
  | testFahrenheitParaCelsius | Conversão de Fahrenheit para Celsius             | OK       |
  | testKelvinParaCelsius     | Conversão de Kelvin para Celsius                 | OK       |
  | testProcessarConversao    | Processamento de conversões válidas e inválidas  | Falha    |
  | testEntradasInvalidas     | Entradas nulas, booleanas e extremas             | OK       |
  | testValoresNegativos      | Conversões de valores negativos                  | Falha    |
  | testPrecisaoDecimal       | Verificação de precisão em valores decimais      | OK       |
  | testEntradasVazias        | Comportamento com strings vazias                 | Falha    |
  | testTiposInesperados      | Tratamento de arrays e objetos                   | OK       |
  +--------------------------+----------------------------------------------------+----------+
  */
*/
