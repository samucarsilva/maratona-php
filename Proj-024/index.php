<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema de Login </title>
</head>
<body>


    <h2> Login do Usuário </h2>


    <?php
    

        $quebraDeLinha = "<br></br>";


        $tentativasLogin = 3;

        $nomeUsuario = "Sam";
        $senhaUsuario = "5102";


            while($tentativasLogin > 0) {

            
                    if($nomeUsuario === "Alexia" &&
                            $senhaUsuario === "5102") {
                                echo "Acesso Concedido!" . $quebraDeLinha;
                                $tentativasLogin = 0;
                                
                    }else {


                        echo "<strong> Tentativas de login restantes: </strong>", $tentativasLogin . $quebraDeLinha;


                        $tentativasLogin--;


                        if($tentativasLogin == 0) {
                            echo "Acesso Negado. Usuário ou senha incorretos..." . $quebraDeLinha;
                            echo "Suas tentativas acabaram... Tente novamente mais tarde." . $quebraDeLinha;

                        }else {
                            echo "Acesso Negado. Usuário ou senha incorretos..." . $quebraDeLinha;

                        }


                    }
                    
                
            }

        
    ?>


</body>
</html>