<?php

class Cliente{
	protected $nome;
	protected $email;
	protected $sconto = 0;
	
	public function __construct($_nome, $_email)
	{
		$this->nome = $_nome;
		$this->email = $_email;
	}
	
	public function setSconto(int $_totaleAcquisto)
	{
		if ( $_totaleAcquisto > 100 ) {
			$this->sconto = 25;
		}
	}
	
	public function getSconto()
	{
		return $this->sconto;
	}
}
