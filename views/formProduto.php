<?php
require_once 'includes/cabecalho.inc.php';
?>
<div class="corpo" align="center" style="line-height: 3em;">
	<h2>Cadastro de Produto</h2>
	<p>
	<form action="../controlers/controlerProduto.php" method="post">
		Nome: <input type="text" size="20" name="pNome">
		<p>Data de Fabricação: <input type="date" name="pData">
		<p>Preço: <input type="number" min="0" name="pPreco">
		<p>Quantidade em Estoque: <input type="number" min="0" name="pEstoque">
		<p>Descrição: <input type="text" size="20" name="pDescricao">
		<p>Referência: <input type="text" size="11" name="pReferencia">
		<p>Código do Fabricante: <input type="number" min="0" value="1000" name="pCodFabricante">
		<p><input type="submit" value="Cadastrar"> <input type="reset" value="Cancelar">
			<input type="hidden" name="opcao" value="1">
	</form>
	<p>
</div>
<?php
require_once 'includes/rodape.inc.php';
?>