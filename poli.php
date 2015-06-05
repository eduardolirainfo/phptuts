<?php

#carrega as classes
include_once 'classes/Pessoa.Class.php';
include_once 'classes/Conta.Class.php';
include_once 'classes/ContaPoupanca.Class.php';
include_once 'classes/ContaCorrente.Class.php';

#Criação do objeto $carlos
$carlos = new Pessoa(10,'Carlos da Silva',1.85, 25, '10/04/1976', 'Ensino Médio', 650.00);

echo "Manipulando o objeto {$carlos->Nome} </br>\n";

#criação do objeto $conta_carlos
$contas[1] = new ContaCorrente(6677,"CC.1234.56","10/07/02",$carlos, 9876, 500.00, 200.00);
$contas[2] = new ContaPoupanca(6678,"CC.1234.57","10/07/02",$carlos, 9876, 500.00, '10/07');

//percorremos as contas
foreach ($contas as $key => $conta)
{
	
	echo "</br>\n";
	echo "Manipulando a conta $key de: {$conta->Titular->Nome}: </br>\n";
	echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} </br>\n";
	$conta->Depositar(200);
	echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} </br>\n";
	$conta->Retirar(100);
	echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} </br>\n";
	
	
}



?>