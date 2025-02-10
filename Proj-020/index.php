<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de Autenticação </title>
</head>
<body>
    

    <h2> Autenticação de Funcionário </h2>


    <?php
    

        $quebraDeLinha = "<br></br>";


        $temPermissao = false;
        $cadastroAtivo = false;
        $administrador = true;


            if(($temPermissao && $cadastroAtivo) || 
                    $administrador) {
            
                echo "Acesso Permitido! Você tem acesso ao sistema." . $quebraDeLinha;
                echo "Seja Bem-Vindo(a)!" . $quebraDeLinha;

            }else {

                echo "Acesso Negado! Você não tem permissão para acessar o sistema." . $quebraDeLinha;
                echo "Por favor, ative ou realize o seu cadastro e tente novamente..." . $quebraDeLinha;

            }

            
    ?>


</body>
</html>