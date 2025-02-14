<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabuada </title>
</head>
<body>


    <h2> Tabuada </h2>


    <?php


        $quebraDeLinha = "<br></br>";


        $tabuada = 8;
        $numero = 1;
    


        for($numero = 1; $numero <= 10; $numero++) {
            $resultado = $tabuada * $numero;
            echo "$tabuada", " x ", "$numero", " = ", "$resultado" . $quebraDeLinha;
        }
    
        
    ?>


</body>
</html>