<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taxa de Entrega </title>
</head>
<body>
    
    
    <h2> Taxa de Entrega </h2>


    <?php
    

        $quebraDeLinha = "<br></br>";


        $valorProduto = 1499; // Valor Original do Produto
        $valorTotal = 0; // Valor Total – Com a Taxa
        $valorFinal = 0; // Valor Final – Com o Desconto
        
       
        const taxaEntrega = 15;
        const valorDesconto = 20;

        
        if($valorProduto > 1000) {

            $valorTotal = $valorProduto + (($valorProduto * taxaEntrega) / 100);
            $valorFinal = $valorTotal - (($valorTotal * valorDesconto) / 100);

        }else {
            $valorFinal = $valorProduto + (($valorProduto * taxaEntrega) / 100);

        }


        echo "Valor do Produto: R$ ", number_format($valorProduto, 2, ",", ".") . $quebraDeLinha;
        echo "Desconto: ", valorDesconto , "%" . $quebraDeLinha;
        echo "Taxa de Entrega: ", taxaEntrega, "%" . $quebraDeLinha;
        echo "Valor Total: R$ ", number_format($valorFinal, 2, ",", ".") . $quebraDeLinha;

    
    ?>


</body>
</html>