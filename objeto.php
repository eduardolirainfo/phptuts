<?php
//insere a classe
include_once 'classes/Produto.Class.php';

//Cria um objeto
$produto = new Produto;

//Atribui valores
$produto->Codigo = 4001;
$produto->Descricao = 'CD - The Best of Eric Clapton';

//extras..
$produto->Preco = 5.00;
$produto->Quantidade = 1;

var_dump($produto);

?>