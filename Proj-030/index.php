<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PetShop </title>
</head>
<body>


    <h2> Dados Do Pet </h2>


    <?php
 

        $quebraDeLinha = "<br></br>";


        // Array Associativo Com os Dados do Pet

        $dadosDoPet = [
            "Nome: " => "Meg",
            "Idade: " => 4,
            "Peso: " => 20 . " kg",
            "Cor: " => "Branco(a)",
        ];
    
    
        // Exibe os Dados do Pet     
         
            foreach ($dadosDoPet as $dado => $valor) {
                echo $dado . $valor . $quebraDeLinha;
            }


    ?>


</body>
</html>