<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    

    <h2> Desconto do Produto </h2>


    <?php 
    

        $quebraDeLinha = "<br></br>";


        $precoProduto = 100;
        $valorDesconto = 0;
        $codigoDesconto = 1;


        switch ($codigoDesconto) {
            case 1:
                $valorDesconto = 10;
                echo "O valor do cupom de desconto é de: $valorDesconto", "%" , $quebraDeLinha;
            break;

            case 2:
                $valorDesconto = 20;
                echo "O valor do cupom de desconto é de: $valorDesconto", "%", $quebraDeLinha;
            break;

            case 3:
                $valorDesconto = 30;
                echo "O valor do cupom de desconto é de: $valorDesconto", "%", $quebraDeLinha;
            break; 

            default:
                echo "Erro: Desconto Inválido!";
            break;
            
        }


        $calculoDesconto = ($precoProduto * $valorDesconto) / 100;
        $precoFinal = $precoProduto - $calculoDesconto;
    
            echo "O valor do produto com o desconto equivale a: R$ ", number_format($precoFinal, 2 , "," , ".");
    

    ?>

</body>
</html>