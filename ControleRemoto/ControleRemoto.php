<?php
/**
 * Description of ControleRemoto
 *
 * @author Larissa
 */
require_once 'controlador.php';
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos especiais;
    public function __construct() {
        $this->volume = 50;
        $this->ligado = FALSE;
        $this->tocando =FALSE;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    public function desligar() {
        $this->setLigado(FALSE);
    }
    public function ligar() {
        $this->setLigado(TRUE);
    }
    public function abrirMenu() {
        echo '<p>******Menu*******</p>';
        echo '<br>Está ligado:'. ($this->getLigado()?"SIM":"NÂO");
        echo '<br>Está tocando?' .($this->getTocando()?"SIM":"NÂO");
        echo '<br>Volume:'.($this->getVolume()?"SIM":"NÂO");
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            echo '|';
        }
        echo '<br>';
    }
    public function fecharMenu() {
        echo 'Fechando menu...';
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }  else {
            echo '<p>Não posso aumentar o volume</p>';
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }  else {
            echo '<p>Não posso diminuir o volume</p>';
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }  else {
            echo '<p>Não está ligadoM</p>';
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }  else {
            echo '<p></p> Não está ligado';
        }
    }
    public function play() {
        if ($this->getLigado() &&!($this->getTocando())){
            $this->setTocando(TRUE);
        }
    }   
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(FALSE);
        }
    }
}
