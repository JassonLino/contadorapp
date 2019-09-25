<?php
/* funcoes */

function criarConexao()
{
	$banco = "contador";
	$usuario = "contador";
	$senha = "senha123";
	$conexao = new PDO("mysql:host=localhost;dbname=${banco}",
		$usuario, $senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") )	;
	return $conexao;
}

function buscarcontador()
{
	$conexao = criarConexao();
	$sql = "SELECT * FROM contador";
	$comando = $conexao->query($sql);
	return $comando->fetchAll();
}

function criarContador($nome)
{
	$conexao = criarConexao();
	$sql = "INSERT INTO contador values ( ?, 0, null)";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$nome
		]
	);
}


function incrementarcontador($id)
{
	$conexao = criarConexao();
	$sql = "update contador set Numero = Numero + 1 where Codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[

			$id
		]
	);

}

function decrementarcontador($id)
{
	$conexao = criarConexao();
	$sql = "update contador set Numero = Numero - 1 where Codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
		
			$id
		]
	);
}
 function excluir($id)
 {
	$conexao = criarConexao();
	$sql = "delete from contador where Codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
		
			$id
		]
	);
 }
