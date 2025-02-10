<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contagem de Estoque </title>
</head>
<body>


    <h2> Contagem de Estoque </h2>


    <?php


        $quebraDeLinha = "<br></br>";

        
        $estoqueProduto = 100;
        $produtoVendido = true;


            while($estoqueProduto > 0 &&
                    $produtoVendido == true) {
                

                switch($estoqueProduto) {
                    
                    case ($estoqueProduto >= 10):
                        echo "Restam ", $estoqueProduto, " Unidades." . $quebraDeLinha;
                            break;

                    case ($estoqueProduto < 10 && $estoqueProduto > 1):
                        echo "Restam ", "0", $estoqueProduto, " Unidades." . $quebraDeLinha;
                            break;

                    case ($estoqueProduto == 1):
                        echo "Restam ", "0", $estoqueProduto, " Unidade." . $quebraDeLinha;
                            break;
                    
                    default:
                            break;
                    
                }
                
                
                $estoqueProduto--;


                if($estoqueProduto < 1) {
                        echo "As unidades do produto acabaram...";
                }


            }


    ?>


</body>
</html>