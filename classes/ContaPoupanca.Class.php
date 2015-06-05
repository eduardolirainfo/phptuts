<?php
class ContaPoupanca extends Conta
{
	
	public $Aniversario;
	
	/*
	método construtor sobrescrito
	agora também vai inicializar a  variável $Aniversario
	*/
	
	
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
	{
		
		//chamada do método construtor da classe pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Aniversario = $Aniversario;			
		
	}
	
	/*
	método Retirar sobrescrito
	verificar se há saldo para retirar a $quantia
	*/
	
	function Retirar($quantia)
	{
		if( $this->Saldo >= $quantia)
	    {
			//Executa o método da classe pai
			parent::Retirar($quantia);
	    }
		else
		{
			echo "Retirada não permitida!";
			return false;	
			
		}
		
		//retirada permitida
		return true;
		
	}
	
	
}