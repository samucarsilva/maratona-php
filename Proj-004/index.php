<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do usuário</title>
</head>
<body>

    <h2>Dados do Usuário</h2>

    <?php 

        $nome = "Samuel";
        $idade = "20";
        $cidade = "Itapecerica da Serra, SP";
        
        $mensagem = "Olá, meu nome é " . $nome . ", tenho $idade anos e moro em ";

        echo $mensagem , $cidade;
    ?>
    
</body>
</html>