<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matriz de Ordem V </title>
</head>
<body>


    <h2> Matriz de Ordem V </h2>


    <?php


        $quebraLinha = "<br></br>";


        $matriz = array();
        $posicao = array();
        $maior = 0;
        $tamanho = 5;


        // Gerarando a Matriz 3x3 Com Números Aleatórios

            for($linha = 0; $linha < $tamanho; $linha++) {
                for($coluna = 0; $coluna < $tamanho; $coluna++) {
                    $matriz[$linha][$coluna] = rand(1, 50);

                    if($matriz[$linha][$coluna] > $maior) {
                        $maior = $matriz[$linha][$coluna]; // Atribuindo o Maior Elemento da Matriz
                    }

                    if($matriz[$linha][$coluna] == $maior) {
                        $posicao[0] = $linha; // Atribuindo a Posição da Linha
                        $posicao[1] = $coluna; // Atribuindo a Posição da Coluna

                    }

                }
            }


        // Imprimir a Matriz de Forma Correta

            for($linha = 0; $linha < $tamanho; $linha++) {
                for($coluna = 0; $coluna < $tamanho; $coluna++) {
                    echo $matriz[$linha][$coluna] . " ";
                }
                echo $quebraLinha;
            }


            echo "O maior elemento da matriz é : " . $maior;


            echo $quebraLinha;


            echo "A posição do maior elemento da linha é  ", $posicao[0], " e da coluna ", $posicao[1];


    ?>


</body>
</html>