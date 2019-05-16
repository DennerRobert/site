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

</head>

<body>


	<?php
		$dados=mysqli_query($conexao,"SELECT * FROM robert order by id Desc");
		$all=mysqli_num_rows($dados);
		
		echo '<table class="table table-striped table-dark">';
		echo '<thead>';
		echo '<tr>';


		echo '<th scope="col">ID</th>';
		echo '<th scope="col">VALOR ATUAL INVESTIDO</th>';
		echo '<th scope="col">PORCENTAGEM DO DIA</th>';
		echo '<th scope="col">RENDIMENTO DO DIA</th>';
		echo '<th scope="col">VALOR TOTAL</th>';
		echo '<th scope="col">DATA</th>';
		

		echo '</tr>';
		echo '</thead>';
		echo '<tbody id="mytable">';

		for ($i=1; $i <= $all; $i++) {
		        $k = mysqli_fetch_assoc($dados);
		        $id = $k['id'];
		        $valor_atual = $k['valoratual'];
		        $porcentagem_dia = $k['porcentagemdiaria'];
		        $resultado_dia = $k['resultadododia'];
		        $resultado_total = $k['resultadototal'];
		        $data = $k['data'];

		        

		        echo '<tr>';
		        echo "<th scope=\"row\">#$i</th>";
		        echo "<td>$valor_atual</td>";
		        echo "<td>$porcentagem_dia</td>";
		        echo "<td>$resultado_dia</td>";
		        echo "<td>$resultado_total</td>";
		        echo "<td>$data</td>";
		        echo '</tr>';

		}

		echo '</tbody>';
		echo '</table>';
		
	?>
</body>
</html>
