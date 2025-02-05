<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes de Amigos</title>
</head>
<body>
    

    <h2> Lista de Amigos </h2>
    
    
    <?php
    
    
        $quebraDeLinha = "<br></br>";
    

        $listaAmigos = ["Luiza","Luiz","Luan","Luana","Paulo"];
    
        print_r($listaAmigos[0] . $quebraDeLinha);
        print_r($listaAmigos[1] . $quebraDeLinha);
        print_r($listaAmigos[2] . $quebraDeLinha);
        print_r($listaAmigos[3] . $quebraDeLinha);
        print_r($listaAmigos[4] . $quebraDeLinha);


    ?>


</body>
</html>