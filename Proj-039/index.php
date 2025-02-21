<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matriz de Ordem III </title>
</head>
<body>


    <h2> Matriz de Ordem III </h2>


    <?php


        $quebraLinha = "<br></br>";


        $matriz = array();
        $soma = 0;
        $tamanho = 3;


        // Gerarando a Matriz 3x3 Com Números Aleatórios

            for($linha = 0; $linha < $tamanho; $linha++) {
                for($coluna = 0; $coluna < $tamanho; $coluna++) {
                    $matriz[$linha][$coluna] = rand(1, 100);
                    $soma += $matriz[$linha][$coluna];
                }
            }


        // Imprimir a Matriz de Forma Correta

            for($linha = 0; $linha < $tamanho; $linha++) {
                for($coluna = 0; $coluna < $tamanho; $coluna++) {
                    echo $matriz[$linha][$coluna] . " ";
                }
                echo $quebraLinha;
            }


            echo $quebraLinha . "A soma dos elementos da matriz é : " . $soma;


    ?>


</body>
</html>