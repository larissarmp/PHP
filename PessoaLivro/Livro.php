<?php
/**
 * Description of Livro
 *
 * @author Larissa
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Método
    public function detalhes(){
        echo '<hr> O título do livro é ' . $this->getTitulo() . ", escrito por " . $this->getAutor();
        echo '<br> Com ' . $this->getTotPaginas() . " paginas e a página atual é " . $this->getPagAtual();
        echo '<br> O ' . $this->getLeitor()->getNome() . " está lendo.";
    }
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = FALSE;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = TRUE;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = FALSE;
    }

    public function folhear($p) {
        $this->pagAtual + $p;
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
