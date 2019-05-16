<?php
#iniciar sessao do usuario
session_start();
#ja inicia a conxao com o banco
include('conexao.php');

#se o campo usuario ou senha estiverem vazios ou digitarem login.php, redireciona para login.html, 
if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: login.html');
	exit();
}

#mysqli_real_escape_string  - ajuda a evitar ataques sql inject
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

#verificar se a query retorna algo
$query = "select * from dados where nickname = '$usuario' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

#retorna 0 para falso e 1 para verdadeiro
$row = mysqli_num_rows($result);

#se autentica pega a sessão do usuario, se nao redireciona para login.html
if($row == 1){
	$_SESSION['usuario'] = $usuario;
	header('Location: home.php');
	exit;
}else{
	echo "<script language='javascript' type='text/javascript'>alert('Usuário $usuario não cadastrado!');window.location.href='login.html'</script>";
	#header('Location: login.html');
	exit;
	}
