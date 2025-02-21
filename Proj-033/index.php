<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detalhes do Carro </title>
</head>
<body>


    <h2> Detalhes do Carro </h2>


    <?php


        // Criando Uma Classe

            class Carro {


                // Atributos

                    private $quebraLinha = "<br></br>";

                    public $modelo;
                    public $ano;
                    public $cor;
                    public $preco;


                // Métodos

                    public function exibirDetelhes() {

                        echo "Modelo: " . $this->modelo . $this->quebraLinha;
                        echo "Ano: " . $this->ano . $this->quebraLinha;
                        echo "Cor: " . $this->cor . $this->quebraLinha;
                        echo "Preço: " . number_format($this->preco, 2, ",", ".") . $this->quebraLinha;

                    }


            }


        // Instanciando Objeto

            $meuCarro = new Carro();
            $meuCarro->modelo = "City";
            $meuCarro->ano = 2013;
            $meuCarro->cor = "Cinza";
            $meuCarro->preco = 55000;

            $meuCarro->exibirDetelhes();


    ?>


</body>
</html>