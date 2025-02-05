<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora Simples </title>
</head>
<body>
   

    <?php 

        $quebraDeLinha = "<br></br>";

        $valorX = 3;
        $valorY = 22;
        
        echo "<h2> Calculadora Simples </h2>";
        echo "<p> Valor de X: $valorX </p>" . "<p> Valor de Y: $valorY </p>" . $quebraDeLinha;

        $soma = $valorX + $valorY;
        $subtr = $valorX - $valorY;
        $multi = $valorX * $valorY;
        $divis = $valorX / $valorY;

        $mensagem = "A soma de X e Y equivale a: " . $soma . $quebraDeLinha . 
        "A subtração de X e Y equivale a: " . $subtr . $quebraDeLinha . 
        "A multiplicação de X e Y equivale a: " . $multi . $quebraDeLinha .
        "A divisão de X e Y equivale a: " . number_format($divis, 2, ",", ".");

        echo $mensagem;

    ?>


</body>
</html>