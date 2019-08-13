<?php
/**
 * Description of Lutador
 *
 * @author Larissa
 */
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categorias;
    private $vitorias;
    private $derrotas;
    private $empate;
    //Métodos
    public function apresentar(){
        echo '<p>-----------</p>';
        echo "<p> Chegou a Hora! <br> O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " kg.";
        echo "<br> Ele tem " . $this->getVitorias() . " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpate() . " empates. </p>";
    }
    public function status(){
        echo "<p>------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategorias();
        echo "e já ganhou " . $this->getVitorias() . " Vezes ";
        echo "e perdeu " . $this->getDerrotas() . " vezes";
        echo "empatou " . $this->getEmpate(). " vezes.";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpate($this->getVitorias() + 1);
    }
    //métodos Especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, 
            $vitorias, $derrotas, $empate) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empate = $empate;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategorias() {
        return $this->categorias;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpate() {
        return $this->empate;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategorias();
    }

    function setCategorias() {
        if($this->peso < 52.2){
            $this->categorias = "Inválido";
        }elseif ($this->peso <= 70.3) {
            $this->categorias = "Leve";           
        }elseif ($this->peso <= 83.9) {
            $this->categorias = "Médio";            
        }elseif ($this->peso <= 120.2) {
            $this->categorias = "Peso pesado";           
        }  else {
            $this->categorias = "Inválido";
        }        
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpate($empate) {
        $this->empate = $empate;
    }



}
