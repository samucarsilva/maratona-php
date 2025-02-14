<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora de Desconto </title>
</head>
<body>


    <h2> Calculadora de Desconto </h2>


    <?php


        $quebraDeLinha = "<br></br>";


        $valorOriginal = 70;
        $valorCompra = $valorOriginal;
        $valorDesconto = 15;


        // Declarando Uma Função Para Calcular o Desconto

            function calculoDesconto($valorCompra) {

                global $valorDesconto;
                global $valorOriginal;

                $desconto = ($valorCompra * $valorDesconto)  / 100;

                return number_format($valorOriginal - $desconto, 2, ",", ".");

            }


        // Chamando a Função Para Calcular o Desconto

        $resultado = calculoDesconto($valorCompra);


        // Imprimindo o Resultado Final da Compra na Tela

            echo "Valor da Compra: R$ ", number_format($valorCompra, 2, ",", ".") . $quebraDeLinha;
            echo "Desconto: ", $valorDesconto, "%" . $quebraDeLinha;
            echo "Valor Final: R$ ", $resultado;


    ?>


</body>
</html>