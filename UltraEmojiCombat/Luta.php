<?php
/**
 * Description of Luta
 *
 * @author Larissa
 */
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //Métodos públicos
    
    public function marcarLuta($l1, $l2){
        if($l1->getCategorias() == $l2->getCategorias() 
                && ($l1 != $l2)){
            $this->aprovada = TRUE;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }  else {
            $this->aprovada = FALSE;
            $this->desafiado = NULL;
            $this->desafiante = NULL;
        }
        
    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0://Empate
                    echo '<p>Empate!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo '<p>'.$this->desafiado->getNome(). ' vence!</p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>".$this->desafiante->getNome()." vence! </p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }

        }  else {
            echo "<p>Luta não pode acontecer</p>";
        }
        
    }
    //Métodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


    
}