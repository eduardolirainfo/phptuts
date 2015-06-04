<?php

class Conta
{
	public $Agencia;
	public $Codigo;
	public $DataDeCriacao;
	public $Titular;
	public $Senha;
	public $Saldo;
	public $Cancelada;
	
	/*
	método contrutor
	inicializa as propriedades
	*/
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
	{
		$this->Agencia = $Agencia;
		$this->Codigo = $Codigo;
		$this->DataDeCriacao = $DataDeCriacao;
		$this->Titular = $Titular;
		$this->Senha = $Senha;
		
		//chamar outro método da classe
		$this->Depositar($Saldo);
		$this->Cancelada = false;
		
		
	}
	
	/*
	método destrutor
	finaliza objeto
	*/
	function __destruct()
	
	{
		
		echo "Objeto conta {$this->Codigo}  de {$this->Titular->Nome} finalizada...</br>\n";
		
	}
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