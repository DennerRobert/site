<?php
#pegar a sessao que foi criado do usuario
include('verifica_login.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
#chama o arq pra verificar a sessao
include('conexao.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to platform</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style>
		body {

		  font-family: "Lato", sans-serif;

		}

		.sidenav {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidenav a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #b3d7ff;
		  display: block;
		  transition: 0.3s;
		}

		.sidenav a:hover {
		  color: #b3d7ff;
		}

		.sidenav .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}

		</style>
<body background="bgimage.jpg">
</head>
<body>

<!--	<h1 align="center">Bem Vindo!</h1>
	<h1 align="center"> <?php echo $_SESSION['usuario'];?></h1>
-->


	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="rendimento.php">Ver Rendimentos</a>
	  <a href="add_rend.php">Adicionar Rendimento</a>
	  <a href="logout.php">Logout</a>
	</div>

	<span  style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;MENU</span>

	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	</script>


</body>
</html>
