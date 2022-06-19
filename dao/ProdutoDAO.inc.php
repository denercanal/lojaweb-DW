<?php

include_once('conexao.inc.php');
include_once('../classes/Produto.inc.php');

class ProdutoDAO
{

	private $con;

	function constrConexao($conexao)
	{
		$c = new Conexao();
		$this->con = $c->getConexao();
	}

	function incluirProduto($produto)
	{

		$produto->dataFabricacao;

		$rs = $this->con->prepare("INSERT INTO produto(nome, data_fabricacao, preco, estoque, descricao, referencia, cod_fabricante) VALUES(:nome, :data_fabricacao, :preco, :estoque, :descricao, :referencia, :cod_fabricante)");

		$rs->bindValue(":nome", $produto->getNome);
		$rs->bindValue(":data_fabricacao", $this->converteData($produto->getData_fabricacao()));
		$rs->bindValue(":preco", $produto->getPreco);
		$rs->bindValue(":estoque", $produto->getEstoque);
		$rs->bindValue(":descricao", $produto->getEescricao);
		$rs->bindValue(":referencia", $produto->getReferencia);
		$rs->bindValue(":cod_fabricante", $produto->getCod_fabricante);
		$rs->execute();
	}

	function converteData($dtFabricacao)
	{
		return date("Y-m-d", $dtFabricacao);
	}

	public function getCon()
	{
		return $this->con;
	}


	public function setCon($con)
	{
		$this->con = $con;
		return $this;
	}
}
