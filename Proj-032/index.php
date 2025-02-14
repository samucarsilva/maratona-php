<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Número Primo </title>
</head>
<body>


    <h2> Número Primo </h2>


    <?php


            function numeroPrimo($numero) {


                $divisiveis = 0;


                // Para Índice Menor Que Número, Repita

                for ($indice = 1; $indice < $numero; $indice++) {
                    if($numero % $indice === 0) {
                        $divisiveis++; // Incrementando a Qtd. de Números Divisíveis 
                    }
                }

               // Verificando Se o Número é Primo ou Não

                if($divisiveis > 2) {
                    echo "O número ", $numero, " não é primo!";
                }else {
                    echo "O número ", $numero, " é primo!";
                }
               

            }


            // Imprimindo o Resultado

                $imprimirNumero = numeroPrimo(5);
                echo $imprimirNumero;

            
    ?>


</body>
</html>