<?php
//insere a classe
include_once 'classes/Produto.Class.php';

//Cria  objetos
$produto1 = new Produto;
$produto2 = new Produto;

//Atribui valores ao objeto $produto1
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - The Best of Eric Clapton';

//Atribui valores ao objeto $produto2
$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - The Eagles Hotel California';

//inprime informações da etiqueta
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

/*
o resultado deve ser:
Código: 4001
Descrição: CD - The Best of Eric Clapton
Código: 4002
Descrição: CD - The Eagles Hotel California
*/


?>