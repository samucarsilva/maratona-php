<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conversor de Temperatura </title>
</head>
<body>
    
    <?php 

        $quebraDeLinha = "<br></br>";

        echo "<h2> Conversor de Temperatura </h2>";
        echo "<p>  Converter: Celsius (°C) — Fahrenheit (°F) </p>" , $quebraDeLinha;

        $valorCelsius = 33.7;
        const decimalConstante = 1.8;
        $FahParaCel = ($valorCelsius * decimalConstante) + 32;
    

        echo "<p>  Celsius: " . $valorCelsius . "°" . "</p>";
        echo "<p>  Fahrenheit: " . $FahParaCel . "°" . "</p>";
       

    ?>

</body>
</html>