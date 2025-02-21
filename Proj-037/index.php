<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conta Corrente </title>
</head>
<body>


    <h2> Conta Corrente </h2>


    <?php


        $quebraLinha = "<br></br>";


        // Criando Uma Classe

            class ContaCorrente {


                // Atributos

                    private $quebraLinha = "<br></br>";
                    private $dadosCliente;


                // Métodos

                    public function __construct($numConta, $saldo) {

                        $this->dadosCliente = [
                            "numeroConta" => $numConta . $this->quebraLinha,
                            "saldoConta" => "R$ " . number_format($saldo, 2, ",", ".") . $this->quebraLinha
                        ];

                    }


                    public function __get($nomeAtrib) {

                        if(array_key_exists($nomeAtrib, $this->dadosCliente)) {
                            return $this->dadosCliente[$nomeAtrib];

                        }else {
                            return "O nome da propriedade informada é inacessível ou inexistente." . $this->quebraLinha;
                        }

                    }


                    public function __set($nomeAtrib, $valor) {

                        if(array_key_exists($nomeAtrib, $this->dadosCliente)) {
                            return $this->dadosCliente[$nomeAtrib] = $valor;

                        }else {
                            return "Nenhum valor pode ser atribuído à propriedade informada, pois ela é inacessível ou inexistente." . $this->quebraLinha;
                        }

                    }


            }


        // Funcionalidades

            function formatarValor($valor) {
                return "R$ " . number_format($valor, 2, ",", ".");
            }


            function criarParagrafo($mensagem) {
                echo "<strong> <p> $mensagem </p> </strong>";
            }


        // Instanciando Objetos

            $contaCorrente01 = new ContaCorrente("1234 001 00012345-6", 3000);


            // Erro Ao Acessar o Número da Conta Diretamente
            // echo $contaCorrente01->dadosCliente["numeroConta"];

            // Erro Ao Acessar o Saldo da Conta Diretamente
            // echo $contaCorrente01->dadosCliente["saldoConta"];


            // Acessando Propriedades Privadas Com GET

                criarParagrafo("Método Mágico GET()");
                echo $contaCorrente01->numeroConta;
                echo $contaCorrente01->saldoConta;


            // Alterando Propriedades Privadas Com SET

                criarParagrafo("Método Mágico SET()");
                echo $contaCorrente01->numeroConta = "9876 002 00098765-4" . $quebraLinha;
                echo $contaCorrente01->saldoConta = formatarValor(1500) . $quebraLinha;


            // Verificando Os Novos Valores Das Propriedades

                criarParagrafo("Método Mágico GET()");
                echo $contaCorrente01->numeroConta;
                echo $contaCorrente01->saldoConta;


    ?>


</body>
</html>