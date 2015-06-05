<?php
class ContaCorrente extends Conta 
{
	
	public $Limite;
	
	/*
	método construtor sobrescrito
	agora também vai inicializar a variável $Limite 
	*/
	
	
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
	{
		
		//chamada do método construtor da classe pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Limite = $Limite;			
		
	}
	
	/*
	método Retirar sobrescrito
	verificar se a $quantia retirada está dentro do limite
	*/
	
	function Retirar($quantia)
	{
		
		$cpmf = 0.05;
		
		if( ($this->Saldo + $this->Limite) >= $quantia)
	    {
			//Executa o método da classe pai
			parent::Retirar($quantia);
			//Executa o método da classe pai
			parent::Retirar($quantia * $cpmf);
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