<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pedidos de Compra </title>
</head>
<body>
    

    <h2> Processamento de Pedidos </h2>

        
    <?php 
    

        $quebraDeLinha = "<br></br>";


        $numeroPedidos = 15;


        do {


            switch($numeroPedidos) {

                case ($numeroPedidos >= 10):
                    echo "Processando Pedido $numeroPedidos" . $quebraDeLinha;
                        break;
                        
                case ($numeroPedidos < 10):
                    echo "Processando Pedido 0", $numeroPedidos . $quebraDeLinha;
                        break;
                
                default:
                        break;
                
            }
            

            $numeroPedidos--;

        
        } while($numeroPedidos > 0);


    ?>


</body>
</html>