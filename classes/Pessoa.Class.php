<?php

class Pessoa
{
	public $Codigo;
	public $Nome;
	public $Altura;
	public $Idade;
	public $Nascimento;
	public $Escolaridade;
	public $Salario;
	
	
	/*
	método contrutor
	inicializa as propriedades
	*/
	function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
	{
		$this->Codigo = $Codigo;
		$this->Nome = $Nome;
		$this->Idade = $Idade;
		$this->Nascimento = $Nascimento;
		$this->Escolaridade = $Escolaridade;
		$this->Salario = $Salario;
		
		
	}
	/*
	método destrutor
	finaliza objeto
	*/
	function __destruct()
	
	{
		
		echo "Objeto {$this->Nome} finalizando...</br>\n";
		
	}
	
	/*
	método Crescer
	aumenta a altura em $centimetros	
	*/
	
	function Crescer($centimetros)
	{
		 if($centrimetros > 0)
		 {
			 
			 $this->Altura += $centimetros;
		 }
		
	}
	
	
	/*
	
	método Formar
	altera a Escolaridade para $titulacao
	
	*/
	
	function Formar($titulacao)
	{
		$this->Escolaridade = $titulacao;
		
	}
	
	/*
	método Envelhecer
	aumenta a Idade em $anos	
	*/
	function Envelhecer($anos)
	{
		if($anos > 0)
			{
			
			$this->Idade += $anos;
		}
		
		
	}
	
	
}

?>