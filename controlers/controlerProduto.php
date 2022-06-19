<?php
require_once '../classes/Produto.inc.php';
require_once '../dao/ProdutoDAO.inc.php';

$opcao = (int)$_REQUEST['opcao'];

if ($opcao == 1) { //inclusão
	$novoProduto = new Produto($_REQUEST['pNome'], $_REQUEST['pData'], $_REQUEST['pPreco'], $_REQUEST['pEstoque'], $_REQUEST['pDescricao'], $_REQUEST['pReferencia'], $_REQUEST['pCodFabricante']);
	//$novoProduto->setAll($_REQUEST['pNome'],$_REQUEST['pData'],$_REQUEST['pPreco'],$_REQUEST['pEstoque'],$_REQUEST['pDescricao'],$_REQUEST['pReferencia'],$_REQUEST['pCodFabricante']);
	$produtoDao = new ProdutoDAO();
	$produtoDao->incluirProduto($novoProduto);
	echo 'Produto cadastrado com sucesso!';
	//header('Location:../views/exibirProdutos.php');
}
