<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos or Neg</title>
</head>
<body>
    

    <h2> Positivo ou Negativo </h2>


    <?php


        $numero = 0;
    
        
        if ($numero < 0) {
            echo "Este número é negativo!";

        }else if($numero > 0){
            echo "Este número é positivo!";

        }else {
            echo "Este número é igual a zero!";

        }

    
    ?>


</body>
</html>