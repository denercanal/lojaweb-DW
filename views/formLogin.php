<?php
require_once 'includes/cabecalho.inc.php';
?>

<h2>Login do sistema</h2>
<p>
<form method="get" action="../controlers/controlerLogin.php">
	Login <input type="text" name="pLogin" size="20">
	<p> Senha <input type="text" name="pSenha" size="10">
	<p> Tipo de usuario:
		<select name="pTipo">
			<option value="1">Administrador</option>
			<option value="2"> Cliente</option>
		</select>
	<p><input type="submit" value="Login"> <input type="reset" value="Cancelar">
</form>
<p>

	<?php

	if (isset($_REQUEST["erro"])) {
		if ((int)($_REQUEST["erro"] == 1)) {
			echo "<br> <h2>Erro</h2>";
		} else {
			if ((int)($_REQUEST["erro"] == 2)) {
				echo "<h2>Por favor, efetue o login</h2>";
			}
		}
	}

	require_once 'includes/rodape.inc.php';
	?>