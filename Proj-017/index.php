<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Amigos</title>
</head>
<body>
    

    <h2> Lista de Amigos </h2>


    <?php


        $quebraDeLinha = "<br></br>";


        $listaDeAmigos = ["Luiza", "Luiz", "Luan", "Luana", "Paulo"];
        

            print_r($listaDeAmigos);


        echo $quebraDeLinha;


            print_r($listaDeAmigos[0] . $quebraDeLinha);
            print_r($listaDeAmigos[1] . $quebraDeLinha);
            print_r($listaDeAmigos[2] . $quebraDeLinha);
            print_r($listaDeAmigos[3] . $quebraDeLinha);
            print_r($listaDeAmigos[4] . $quebraDeLinha);


            unset($listaDeAmigos[1]); // Removendo o Segundo Índice do Array
        $listaDeAmigos = array_values($listaDeAmigos); // Reorganizando os Índices do Array


        echo $quebraDeLinha;


            print_r($listaDeAmigos[0] . $quebraDeLinha);
            print_r($listaDeAmigos[1] . $quebraDeLinha);
            print_r($listaDeAmigos[2] . $quebraDeLinha);
            print_r($listaDeAmigos[3] . $quebraDeLinha);


        echo $quebraDeLinha;


            print_r($listaDeAmigos);


    ?>


</body>
</html>