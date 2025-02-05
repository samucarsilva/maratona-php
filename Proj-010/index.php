<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>

    <h2> Verificação de Idade para Voto! </h2>

    <?php 
     

        $idade = 10;


     if($idade < 16) {
        echo "Você ainda não pode votar! \u{1F615}";

     }else if($idade >= 16 && 
            $idade < 18){

        echo "Você pode votar, mas o voto não é obrigatório!";

     } else if ( $idade >= 18) {
        echo "Você pode votar; o voto é obrigatório!";

     }

     
    ?>
    
</body>
</html>