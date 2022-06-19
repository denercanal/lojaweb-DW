<?php

class Produto
{
	public $idProduto;
	public $nomeProduto;
	public $dataFabricacao;
	public $preco;
	public $estoque;
	public $descricao;
	public $referencia;
	public $codFabricante;


	function Produto()
	{
	}

	function recebeProduto($idProduto, $nomeProduto, $dataFabricacao, $preco, $estoque, $descricao, $referencia, $codFabricante)
	{
		$this->idProduto = ($idProduto);
		$this->nomeProduto = ($nomeProduto);
		$this->dataFabricacao = strtotime(str_replace("-", "/", $dataFabricacao));
		$this->referencia = ($referencia);
		$this->codFabricante = ($codFabricante);
		$this->preco = ($preco);
		$this->descricao = ($descricao);
		$this->estoque = ($estoque);
	}

	function recebeData($dtFabricacao)
	{
		return $this->dataFabricacao = strtotime($dtFabricacao);
	}

	public function getIdProduto()
	{
		return $this->idProduto;
	}

	public function setIdProduto($idProduto)
	{
		$this->idProduto = $idProduto;
		return $this;
	}

	public function getNomeProduto()
	{
		return $this->nomeProduto;
	}

	public function setNomeProduto($nomeProduto)
	{
		$this->nomeProduto = $nomeProduto;
		return $this;
	}

	public function getDataFabricacao()
	{
		return $this->dataFabricacao;
	}

	public function setDataFabricacao($dataFabricacao)
	{
		$this->dataFabricacao = $dataFabricacao;
		return $this;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
		return $this;
	}

	public function getEstoque()
	{
		return $this->estoque;
	}


	public function setEstoque($estoque)
	{
		$this->estoque = $estoque;
		return $this;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
		return $this;
	}


	public function getCodFabricante()
	{
		return $this->codFabricante;
	}

	public function setCodFabricante($codFabricante)
	{
		$this->codFabricante = $codFabricante;
		return $this;
	}

	public function getReferencia()
	{
		return $this->referencia;
	}


	public function setReferencia($referencia)
	{
		$this->referencia = $referencia;
		return $this;
	}
}
