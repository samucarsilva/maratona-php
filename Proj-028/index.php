<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Média Aritmética </title>
</head>
<body>


    <h2> Média Aritmética </h2>


    <?php


        $quebraDeLinha = "<br></br>";


        $numeros = [8, 2, 5, 6, 7, 6, 9, 10, 4, 3];
        $mediaAritmetica = 0;
        $somaElementos = 0;
        

            echo "Números: ";

        
            for($indice = 0; $indice < count($numeros); $indice++) {
                $listaNumeros = print_r("$numeros[$indice], ");
                $somaElementos += $numeros[$indice];
            }
        
        
            echo $listaNumeros . $quebraDeLinha;


        $mediaAritmetica = $somaElementos / count($numeros);


            echo "Média: ", number_format($mediaAritmetica, 2, ",", ".") . $quebraDeLinha;
        

    ?>


</body>
</html>