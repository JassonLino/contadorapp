<?php
/* funcoes */

function criarConexao()
{
	$banco = "app_contador";
	$usuario = "contador";
	$senha = "senha123";
	$conexao = new PDO("mysql:host=localhost;dbname=${banco}",
		$usuario, $senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
	return $conexao;
}

function buscarContadores()
{
	$conexao = criarConexao();
	$sql = "SELECT * FROM contador";
	$comando = $conexao->query($sql);
	return $comando->fetchAll();
}

function criarContador($nome)
{

}

function incrementarContador($id)
{

}

function decrementarContador($id)
{

}