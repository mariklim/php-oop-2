<?php
class Ricetta{
    private $nome;
    private $ingredienti;
    private $tempoPreparazione;

    public function __construct($_nome,$_ingredienti,$_tempoPreparazione)
    {
        $this->nome = $_nome;
        $this->ingredienti = $_ingredienti;
        $this->tempoPreparazione = $_tempoPreparazione;
    
    }

    public function getNome()
    {
        return $this ->nome;
        
    }
}



