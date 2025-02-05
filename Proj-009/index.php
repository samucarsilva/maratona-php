<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota de Estudante</title>
</head>
<body>


    <h2> Nota do Estudante </h2>


    <?php 

    $quebraDeLinha = "<br></br>";

    $nota = 11;


    if($nota >= 0 && 
        $nota < 5) {
        echo "Reprovado!";
        
    } else if ( $nota >= 5 &&
         $nota < 7){

           echo "Recuperação."; 

    } else if ( $nota >= 7 &&
        $nota < 9){
            echo "Aprovado!";

        
     } else if ( $nota >= 9 && $nota <= 10){
            echo "Aprovado Com Distinção!";
            echo $quebraDeLinha;
            echo "Parabéns! \u{1F604}";

            
     } else {
        echo "Esta nota extrapolou o limite permitido!  \u{1F610}";
        echo $quebraDeLinha;
        echo "Mínimo: 0.0" . $quebraDeLinha;
        echo "Máximo: 10.0";

        

     }


    
    ?>


</body>
</html>