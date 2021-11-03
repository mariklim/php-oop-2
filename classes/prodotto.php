<?php
class Prodotto{
    private $nome;
    private $tostatura;
    private $origine;
    private $formato;
    private $prezzo;
    private $ricette;


    public function __construct($_nome,$_tostatura,$_origine,$_formato,$_prezzo,  $_ricette =[])
    {
        $this->nome = $_nome;
        $this->tostatura = $_tostatura;
        $this->origine = $_origine;
        $this->formato = $_formato;
        $this->prezzo = $_prezzo;
       $this->ricette = $_ricette;
    }

    public function getTitolo()
    {
        return  $this->nome;
    }
    public function getTostatura()
    {
        return $this->tostatura;
    }
    public function getOrigine()
    {
        return  $this->origine;
    }
    public function getFormato()
    {
        return $this->formato;
    }
    public function getPrezzo()
    {
        return  $this->prezzo;
    }
    public function getRicette()
    {
        return $this->ricette;
    }
    public function SetRicette($_ricetta)
    {
        $this->ricette[]=$_ricetta;
    }
}