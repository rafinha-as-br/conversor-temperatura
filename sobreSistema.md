 /*       

      ///Lógica do programa:

      //funcionamento básico: O usuário coloca um valor no campo da esquerda, clica em uma dos tipos de temperatura na esquerda, o programa entao guarda esse tipo e valor,
      //passa para o lado direito e espera o usuário clicar para qual tipo de temperatura ele quer converter (obs: na parte direita, o botão que represneta a temperatura informada do lado direito estará bloqueado (obviamente para evitar de converter de celsius para celsius por exemplo))
      
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
        // reliza a função de conversão (uma função que recebe temperatura contendo valor e o tipo (dado1 e dado2) e para qual tipo de temperatura a ser convertida (dado 3))
           switch ($dado3) {
               
              case "celsius":               
                realizar função de converter para celcius recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
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
        // se o usuário  clicar no botão de reiniciar no meio, volta para o início
        // terceiro teste: Se as variáveis foram todas resetadas e esta tudo pronto para uma nova conversão...
          
        //Para rodar os testes usar : vendor\bin\phpunit --bootstrap vendor\autoload.php tests\ConversorTest.php
    */