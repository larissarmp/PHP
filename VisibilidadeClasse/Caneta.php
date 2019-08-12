<?php
/**
 * Description of Caneta
 *
 * @author Larissa
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function  rabiscar(){
        if ($this->tampada == true){ 
            echo '<p>Não posso rabiscar</p>';
        }else {
            echo '<p>Estou rabiscando...</p>';
        }
    }
    public function tampar(){
        $this->tampada = TRUE;
           
    }
    public function  destampar(){
        $this->tampada == FALSE;
        
    }
}
