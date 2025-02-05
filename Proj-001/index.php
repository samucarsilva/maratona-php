<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Saudação Com Nome </title>
</head>
<body>
    

    <?php 
    
        $nome = "Luis";
        $saudacao = "Olá, " . "$nome!";
        $mensagem = "Seja Bem-Vindo(a) ao Site!";

        $quebraDeLinha = "<br></br>";

        echo "$saudacao", $quebraDeLinha , "$mensagem";
    
    ?>
    

</body>
</html>

