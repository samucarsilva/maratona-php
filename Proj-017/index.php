<!DOCTYPE html>
<html lang="pt-br">
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
        

        print_r($listaDeAmigos[0] . $quebraDeLinha);
        print_r($listaDeAmigos[1] . $quebraDeLinha);
        print_r($listaDeAmigos[2] . $quebraDeLinha);
        print_r($listaDeAmigos[3] . $quebraDeLinha);
        print_r($listaDeAmigos[4] . $quebraDeLinha);
    

        echo $quebraDeLinha;


        unset($listaDeAmigos[1]);
        $listaDeAmigos = array_values($listaDeAmigos);

        print_r($listaDeAmigos[0] . $quebraDeLinha);
        print_r($listaDeAmigos[1] . $quebraDeLinha);
        print_r($listaDeAmigos[2] . $quebraDeLinha);
        print_r($listaDeAmigos[3] . $quebraDeLinha);


    ?>


</body>
</html>