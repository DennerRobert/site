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
    $login = $_POST['login'];
    $senha = md5 ($_POST['senha']);
    $nome = $_POST['user'];


    $mysqli = mysqli_connect($host, $user, $pass, $banco);
    if ($mysqli->connect_errno) {
        echo "Problemas para conectar no banco. Verifique os dados!";
        echo mysqli_connect_error();
        die();
      }
    


    $sqlGravar = "INSERT INTO dados(email, senha, nickname) VALUES('$login','$senha','$nome')";
    $mysqli->query($sqlGravar);

      echo "<script language='javascript' type='text/javascript'>alert('Usuário $nome cadastrado com sucesso!');window.location.href='login.html'</script>";
?>
</body>
</html>
