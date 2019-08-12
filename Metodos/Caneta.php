<?php
/**
 * Description of Caneta
 *
 * @author Larissa
 */
class Caneta {
    public $modelo;
    private $ponta;
    private  $cor;
    private $tampar;
    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->tampar = TRUE;
    }
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampar() {
        return $this->tampar;
    }
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTampar($tampar) {
        $this->tampar = $tampar;
    }




}    