<?php
/**
 * Description of Caneta
 *
 * @author Larissa
 */
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function  rabiscar(){
        if ($this->tampada == true){ 
            echo '<p>Não posso rabiscar</p>';
        }else {
            echo '<p>Estou rabiscando...</p>';
        }
    }
    function tampa(){
        $this->tampada = TRUE;
           
    }
    function  destampar(){
        $this->tampada == FALSE;
        
    }
}
