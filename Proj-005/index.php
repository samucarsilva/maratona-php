<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo Bancário</title>

</head>
<body>
    
    <h2>Empréstimo Bancário</h2>
   
   <?php 
    
    $numParcelas = 10;
    $valorDoEmprestimo = 2500;
    $taxaDeJuros = 2.862;

    $totalDoEmprestimo =  $valorDoEmprestimo * (1 + $taxaDeJuros) / $numParcelas;

    echo "<p>Valor do Empréstimo</p>";
    echo "R$ " , $valorDoEmprestimo;

    echo "<p>Taxa de Juros</p>";
    echo number_format($taxaDeJuros, 2, ",", "."), "%";

    echo "<p>Número de Parcelas</p>";
    echo $numParcelas, "x";


    echo "<p>Total do Empréstimo</p>";
    echo "R$ " , number_format($totalDoEmprestimo, 2, ",", ".");
    



 ?>

    
</body>
</html>