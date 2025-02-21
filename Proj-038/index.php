<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loja de Roupas </title>
</head>
<body>


    <h2> Loja de Roupas </h2>


    <?php


        $quebraLinha = "<br></br>";


        // Criando Uma Classe

            class Vestimenta {


                // Atributos

                    private $quebraLinha = "<br></br>";

                    private string $codigoProduto;
                    public $precoProduto;
                    public $nomeProduto;



                // Métodos

                    public function __construct(string $codigoProduto, string $nomeProduto, float $precoProduto) {

                        $this->codigoProduto = $codigoProduto;
                        $this->nomeProduto = $nomeProduto;
                        $this->precoProduto = "R$ " . number_format($precoProduto, 2, ",", ".");

                    }


                    public function __get($nomeAtrib) {

                        switch ($nomeAtrib) {

                            case 'codigoProduto':
                                return $this->codigoProduto;
                                    break;
                            
                            default:
                                return "O nome da propriedade informada é inacessível ou inexistente." . $this->quebraLinha;
                                    break;

                        }

                    }


                    public function __set($nomeAtrib, $valor) {

                        switch($nomeAtrib) {

                            case 'codigoProduto':

                                if(is_string($valor) &&
                                    !empty($valor)) {
                                        $this->codigoProduto = $valor;
                                }else {
                                    echo "ERRO: Código do produto inválido... Deve ser do tipo string (não vazia)" . $this->quebraLinha;
                                }

                                    break;

                            default:
                                echo "Nenhum valor pode ser atribuído ou alterado; a propriedade informada é inacessível ou inexistente." . $this->quebraLinha;
                                    break;

                        }

                            return null;

                    }


            }

        
        // Funcionalidades

            function escreverMensagem($mensagem) {
                    global $quebraLinha;
                echo "$mensagem" . $quebraLinha;
            }


            function formatarValor($valor) {
                return "R$ " . number_format($valor, 2, ",", ".");
            }


        // Instanciando Objetos

            $camiseta01 = new Vestimenta("C-M-CZ-00123", "Camiseta", 100);


            // Erro Ao Acessar o Código do Produto Diretamente
            // Dependendo Do Mecanismo de Controle Dentro do GET
            // escreverMensagem($camiseta01->codigoProduto);


            // Acessando Propriedade Privada Com GET

                escreverMensagem("Código Produto: " . $camiseta01->codigoProduto);
                escreverMensagem("Nome Produto: " . $camiseta01->nomeProduto);
                escreverMensagem("Preço Produto: " . $camiseta01->precoProduto);


            // Alterando Propriedade Privada Com SET
            // Não Deve Funcionar, Pois é Do Tipo Int

                 $camiseta01->codigoProduto = 00123;


            // Acessando Propriedade Privada Com GET
            // O Valor Ainda Corresponde ao Mesmo

                escreverMensagem("Código Produto: " . $camiseta01->codigoProduto);


            // Alterando Propriedade Privada Com SET
            // Agora Deve Funcionar; é Do Tipo String

                $camiseta01->codigoProduto = "J-M-CZ-00456" . $quebraLinha;


            // Acessando Propriedade Privada Com GET
            // Com o Novo Valor Atribuído

                escreverMensagem("Novo Código Produto: " . $camiseta01->codigoProduto);


    ?>


</body>
</html>