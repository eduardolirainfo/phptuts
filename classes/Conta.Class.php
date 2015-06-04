<?php

class Conta
{
	public $Agencia;
	public $Codigo;
	public $DataDeCriacao;
	public $Titula;
	public $Senha;
	public $Saldo;
	public $Cancelada;
	
	
	/*
	método Retirar
	diminui o saldo em $quantia	
	*/
	
	function Retirar($quantia)
	{
		 if($quantia > 0)
		 {
			 
			 $this->Saldo -= $quantia;
		 }
		
	}
	
	
	/*
	
	método Depositar
	aumenta o saldo em $quantia
	
	*/
	
	function Depositar($quantia)
	{
		if($quantia > 0)
		{
		$this->Saldo += $quantia;
		}
		
	}
	
	/*
	método ObterSaldo
	retorna o saldo atual	
	*/
	function ObterSaldo()
	{
		return $this->Saldo;
		
	}
	
	
}

?>