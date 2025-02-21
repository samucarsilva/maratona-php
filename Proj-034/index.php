<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biblioteca Digital </title>
</head>
<body>


    <h2> Acervo Digital </h2>


    <?php


        // Criando Uma Classe

            class Livro {


                // Atributos

                    private $quebraLinha = "<br></br>";

                    public $tituloLivro;
                    public $nomeAutor;
                    public $anoPublicacao;


                // Método(s)

                    public function exibirInfoLivro() {

                        echo "Título: ", $this->tituloLivro . $this->quebraLinha;
                        echo "Autor: ", $this->nomeAutor . $this->quebraLinha;
                        echo "Ano de Publicação: ", $this->anoPublicacao . $this->quebraLinha;

                        echo $this->quebraLinha;

                    }


            }


        // Instanciando Objeto(s)

            $meuLivro1 = new Livro();
            $meuLivro1->tituloLivro = "Pantano de Sangue";
            $meuLivro1->nomeAutor = "Pedro Bandeira";
            $meuLivro1->anoPublicacao = 1998;

            $meuLivro1->exibirInfoLivro();


            $meuLivro2 = new Livro();
            $meuLivro2->tituloLivro = "O Senhor dos Anéis";
            $meuLivro2->nomeAutor = "J. R. R. Tolkien";
            $meuLivro2->anoPublicacao = 1954;

            $meuLivro2->exibirInfoLivro();


            $meuLivro3 = new Livro();
            $meuLivro3->tituloLivro = "Guerra Civil";
            $meuLivro3->nomeAutor = "Stuart Moore";
            $meuLivro3->anoPublicacao = 2014;

            $meuLivro3->exibirInfoLivro();


    ?>


</body>
</html>