<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dados do Aluno </title>
</head>
<body>


    <h2> Dados do Aluno </h2>


    <?php


        // Criando Uma Classe

            class Aluno {


                // Atributos

                    private $quebraDeLinha;

                    public $nomeAluno;
                    private $matricula;
                    public $nomeCurso;


                // Métodos

                    public function __construct($nome, $matricula, $curso) {
                        $this->quebraDeLinha = "<br></br>";

                        $this->nomeAluno = $nome;
                        $this->matricula = $matricula;
                        $this->nomeCurso = $curso;
                    }


                    public function __destruct() {
                        echo "Sistema: Aluno(a) \n" . $this->nomeAluno . " — do curso $this->nomeCurso — " . " foi removido(a) do sistema!" . $this -> quebraDeLinha;
                    }


            }


        // Instanciando Objetos

            $aluno01 = new Aluno("Calebi Soares", 1234567890, "Técnico em Informática");
            $aluno02 = new Aluno("Samuel Resende", 9876543210, "Técnico em Informática");


    ?>


</body>
</html>