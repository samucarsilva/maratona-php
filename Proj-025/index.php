<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tentativas de Login </title>
</head>
<body>
    

    <h2> Login do Usuário </h2>


    <?php 
    

        $quebraDeLinha = "<br></br>";


        $tentativasLogin = 0;

        $nomeUsuario = "Alexia";
        $senhaUsuario = "5102";


            do {
                

                $tentativasLogin++;


                if($nomeUsuario === "Sam" && 
                        $senhaUsuario === "5102") {
                            
                            echo "Acesso Concedido!" . $quebraDeLinha;
                            $tentativasLogin = 3;
                            
                }else {


                    echo "<strong> Quantidade de tentativas: </strong>", $tentativasLogin . $quebraDeLinha;

                    
                        if($tentativasLogin == 3) {
                            echo "Acesso Negado. Usuário ou senha incorretos..." . $quebraDeLinha;
                            echo "Você excedeu o limite de tentativas máximo ($tentativasLogin)... Tente novamente mais tarde." . $quebraDeLinha;

                        }else {
                            echo "Acesso Negado. Usuário ou senha incorretos..." . $quebraDeLinha;

                        }

                        
                }

               
            } while($tentativasLogin < 3);

    ?>


</body>
</html>