<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produto </title>
</head>
<body>


    <h2> Produto </h2>


    <?php


        // Criando Uma Classe

            class Produto {
                


                // Atributos

                    private $quebraDeLinha;
                    
                    public $nomeProduto;
                    public $precoProduto;
                    public $quantidade;

                
                // Métodos

                    public function __construct($nome, $preco, $qtde) {
                        $this->quebraDeLinha = "<br></br>";

                        $this->nomeProduto = $nome;
                        $this->precoProduto = $preco;
                        $this->quantidade = $qtde;
                    }


                    public function __destruct() {
                        echo "O produto foi excluído..." . $this -> quebraDeLinha;
                    }


                    public function calcularDesconto($valorDesconto) {

                        $valorOriginal = $this -> precoProduto * $this -> quantidade;
                        $calculoDesconto = ($valorOriginal * $valorDesconto) / 100;
                        $valorFinal = $valorOriginal - $calculoDesconto;

                        echo "O valor do produto, com o desconto aplicado, equivale a: R$ ", number_format($valorFinal, 2, ",", ".") . $this -> quebraDeLinha;
                    }


            }


        // Instanciando Objetos

            $produto01 = new Produto("Camiseta", 50, 2);
            $produto01->calcularDesconto(10);


    ?>


</body>
</html>