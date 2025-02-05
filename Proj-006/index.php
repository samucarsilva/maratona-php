<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
   
    <h2>Conversor de Moeda</h2>
    <p>Real — Dólar</p>

    <?php 

        $quebraDeLinha = "<br></br>";
       
        $quantidadeReais = 100;
        $valorDolar = 5.85;
        $valorDoReal = 1.00;
        
        $taxaDeCambio = $valorDoReal / $valorDolar;
        $converterParaDolar = $quantidadeReais * $taxaDeCambio;



        echo "R$ ", number_format($quantidadeReais, 2, ",", ".") . $quebraDeLinha;
        echo "$ ", number_format(round($converterParaDolar), 2, ",", ".");

    ?>

    
</body>
</html>