<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somando Listas</title>
</head>
<body>


    <h2>Somando Listas</h2>


    <?php
    
    
        $lista1 = [1, 2, 3, 4, 5];
        $lista2 = [6, 7, 8, 9, 10];

        $listaNova = array_merge($lista1, $lista2);

        
        print_r($listaNova);
    
            
    ?>


</body>
</html>