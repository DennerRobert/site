<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
 
 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "cadastros";
    $mysqli = new mysqli($host, $user, $pass, $banco) or die(mysql_error());
   



    $mysqli = mysqli_connect($host, $user, $pass, $banco);
    if ($mysqli->connect_errno) {
        echo "Problemas para conectar no banco. Verifique os dados!";
        echo mysqli_connect_error();
        die();
      }
    


	$valoratual = $_POST['vatual'];
	$porcdia = $_POST['porcdia'];


	$resdia = $valoratual / 100 * $porcdia;

	
	$restotal_banco = "SELECT resultadododia FROM robert ORDER BY `robert`.`id` Desc LIMIT 1";
    $resaporte = $mysqli->query($restotal_banco);
    $restotal_banco = mysqli_query($mysqli,"SELECT * FROM robert ORDER BY `robert`.`id` Desc LIMIT 1");

    if (mysqli_num_rows($restotal_banco) == 0) {
    	echo 'só adiciona';
    	$restotal = $resdia;
    	$sqlGravar = "INSERT INTO `robert` (`id`, `valoratual`, `porcentagemdiaria`, `resultadododia`, `resultadototal`, `data`) VALUES ('', '$valoratual', '$porcdia', '$resdia', '$restotal', '')"; 
    	$mysqli->query($sqlGravar);

    	echo "<script language='javascript' type='text/javascript'>alert('Rendimento salvo com sucesso!');window.location.href='rendimento.php'</script>";

    }else{
    $dudu = mysqli_fetch_all($restotal_banco);
   
	$restotal =  $dudu['0']['4'] + $resdia;

	$sqlGravar = "INSERT INTO `robert` (`id`, `valoratual`, `porcentagemdiaria`, `resultadododia`, `resultadototal`, `data`) VALUES ('', '$valoratual', '$porcdia', '$resdia', '$restotal', '')"; 


	#print_r( );
		$mysqli->query($sqlGravar);

     echo "<script language='javascript' type='text/javascript'>alert('Rendimento salvo com sucesso!');window.location.href='rendimento.php'</script>";
}

?>
</body>
</html>