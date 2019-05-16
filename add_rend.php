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
        body{
        background-image: url("http://ayushseminarmaha.info/wp-content/uploads/2018/09/cool-picture-of-dragon-backgrounds-coloring-page-518489-most-popular-1920x1080.jpg");
        background-repeat:no-repeat;
        background-size:cover;

        }

        .container{
        margin-top:20%;
        width:430px;
        height:280px;
        background-color: rgba(0, 0, 0, 0.7);
        color:white;


        }
        label{
        margin-top:30px;
        }
        button{
        margin-top:20px;

        }

        h1{
        margin-top:90px;
        color:white;
        }
    </style>

</head>

<body>
  <div class="container" align="center">
    
      <form action="add_rend_banco.php" method="post" class="class="form-group">

            <label >Valor Atual</label><br>
            <input type="text" name="vatual" required><br>

            <label >Porcentagem do Dia</label><br>
            <input type="text" name="porcdia" required><br>

            <button type="submit" class="btn btn-primary">Salvar Rendimento</button>
            

</body>
</html>