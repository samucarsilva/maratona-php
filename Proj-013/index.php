<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
</head>
<body>
    

    <h2> Dia da Semana </h2>


    <?php 


        $diaSemana = 1;
        

        switch ($diaSemana){
            case 1 :
                echo "Domingo";
            break;

            case 2 : 
                echo "Segunda-Feira";
            break;

            case 3 :
                echo "Terça-Feira";
            break;

            case 4 : 
                echo "Quarta-Feira";
            break;

            case 5 :
                echo "Quinta-Feira";
            break;

            case 6 :
                echo "Sexta-Feira";
            break;

            case 7 :
                echo "Sábado";
            break;

            default:
                echo "Dia da Semana inexistente! <br></br>";
                echo "Informe um valor válido!";
            break;

        }

        
    ?>


</body>
</html>