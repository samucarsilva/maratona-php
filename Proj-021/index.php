<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
</head>
<body>
    

    <h2> Cálculo de Desconto </h2>


    <?php 


        $quebraDeLinha = "<br></br>";


        $valorCompra = 1000;
        $valorFinal = 0;
        
        const desconto = 10;
        const imposto = 8;


            if($valorCompra > 500) {
                
                $valorFinal = ($valorCompra + (($valorCompra * imposto) / 100)) - (($valorCompra * desconto) / 100);
            
            }else {
            
                $valorFinal = $valorCompra + (($valorCompra * 8) / 100);
            
            }
        
        echo "Valor da Compra: R$ ", number_format($valorCompra, 2, ",", ".") . $quebraDeLinha;
        echo "Desconto: ", desconto, "%" . $quebraDeLinha;
        echo "Imposto: ", imposto, "%" . $quebraDeLinha;
        echo "Valor Final: R$ ", number_format($valorFinal, 2, ",", ".") . $quebraDeLinha;
        
        
    ?>


</body>
</html>