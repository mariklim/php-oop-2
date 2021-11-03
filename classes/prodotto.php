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
}