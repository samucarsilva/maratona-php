<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contando Números</title>
</head>
<body>


    <h2> Contando Números </h2>


    <?php 


        $quebraDeLinha = "<br></br>";


        $listaDeNumeros = [15, 8, 5, 80, 33, 620, 25, 13, 75, 80, 256, 88];


        $numerosPares = array_filter($listaDeNumeros, fn($value) => $value % 2 === 0);
        $quantidadeTotal = count($numerosPares);


            print_r($numerosPares);


        echo $quebraDeLinha;


        echo "A quantidade total de números pares equivale a: ", $quantidadeTotal;


    ?>


</body>
</html>