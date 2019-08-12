<?php
/**
 * Description of ContaBancaria
 *
 * @author Larissa
 */
class ContaBancaria {
    protected $tipo;
    private   $numConta;
    private   $saldo;
    private   $dono;
    private   $status;
 //metodos especiais   
    public function getTipo() {
        return $this->tipo;
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function ContaBancaria() {
        $this->setSaldo(0);
        $this->setStatus(FALSE);
    }
    //metodos
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(TRUE);
        if($tipo =="CC"){
            $this->setSaldo(50);
        }elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }                    
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo '<p>Conta com dinheiro</p>';
        }elseif ($this->getSaldo() < 0) {
            echo '<p> Conta em débito</p>';
        }  else {
            $this->setStatus(FALSE);
        }
    }
    public function depositar($deposito){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $deposito);
        }  else {
            echo '<p> Conta fechada: Impossivel depositar</p>';
        }
    }
    public function sacar($valor){
        if($this->getStatus()){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
            }  else {
                print '<p> Saldo insuficiente</p>';
                }
            }else {
            print '<p>Impossivel sacar</p>';
            }
        }
    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }         
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() -$valor);
        }  else {
                print 'Saldo insuficiente';
            }  
    }

}
