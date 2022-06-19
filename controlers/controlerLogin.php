<?php
require_once("../dao/conexao.inc.php");

$login = $_REQUEST["pLogin"];
$senha = $_REQUEST["pSenha"];
$tipo = $_REQUEST["pTipo"];

function efetuarLogin($login, $senha)
{
	$con = new Conexao();
	$conexao = $con->getConexao();

	$sql = $conexao->prepare("SELECT * FROM usuarios WHERE login=:usr AND senha=:pass");

	$login = strtolower($login);
	$senha = strtolower($senha);
	$sql->bindValue(':usr', $login);
	$sql->bindValue(':pass', $senha);
	$sql->execute();

	if ($sql->rowCount() == 1) {
		return true;
	} else {
		return false;
	}
}

if ($tipo == "1") {
	$logado = efetuarLogin($login, $senha);
	if ($logado) {
		session_start();

		$_SESSION["logado"] = true;
		$_SESSION["tipoUsuario"] = "1";
		header("Location: ../views/index.php");
	}
} else {
	header("Location: ../views/formLogin.php?erro=1");
}
