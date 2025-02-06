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


        $listaDeNumeros = [2, 67, 98, 100, 558, 620, 899, 985, 996, 80, 256, 88];
    

        $numerosPares = array_filter($listaDeNumeros, fn($value) => $value % 2 === 0);

        print_r($numerosPares);


    ?>


</body>
</html>