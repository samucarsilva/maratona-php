<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
</head>
<body>


    <h2> Peças do Carro </h2>


    <?php


        $quebraDeLinha = "<br></br>";


        $pecasCarro = [
            "Motor", 
            "Transmissão", 
            "Bateria", 
            "Radiador", 
            "Alternador", 
            "Freios", 
            "Suspensão", 
            "Bomba de Combustível", 
            "Pneus", 
            "Filtro de Ar"
        ];


            foreach($pecasCarro as $peca) {
                print_r("– " . $peca . $quebraDeLinha);
            }
    

    ?>


</body>
</html>