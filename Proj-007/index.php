<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>

    <h2>Calculadora de Descontos</h2>

    <?php 

        $quebraDeLinha = "<br></br>";

        $valorDoProduto = 3440.07;
        $valorDoDesconto = 15;
        $calculoDeDesconto = $valorDoProduto * ($valorDoDesconto / 100);
        $totalDoProduto = $valorDoProduto - $calculoDeDesconto;

        echo "Valor do Produto: R$ " , number_format($valorDoProduto,  2, ",", ".") . $quebraDeLinha;
        echo "Valor do Desconto: " , $valorDoDesconto, "%" . $quebraDeLinha;
        echo "Total do Produto: R$ " ,number_format($totalDoProduto,  2, ",", ".") ;

    ?>


    
</body>
</html>