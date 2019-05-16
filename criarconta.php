<!DOCTYPE html>
<html>
<head>
	<title>Criar Conta</title>
	<meta charset="UTF-8"/>
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
        height:290px;
        background-color: rgba(0, 0, 0, 0.7);
        color:white;


        }
        label{
        margin-top: 9px;
        }
        button{
        margin-top:8px;

        }

    </style>
</head>
<body>
	<div class="container">
		<form action="cadastro.php" method="post" class="class="form-group">

			<label>Usuário</label>
            <input type="text" class="form-control"  name="user" placeholder="Username" required>

            <label>E-mail</label>
            <input type="text" class="form-control"  name="login" placeholder="fulano@hotmail.com" required> 

            <label>Senha</label>
            <input type="password" class="form-control"  name="senha" placeholder="Password" required> 

            <button type="submit"  class="btn btn-primary">Criar Conta</button>
            <button type="button" class="btn btn-primary" onClick="history.go(-1)">Voltar</button> 

      </form>
    </div>
</body>
</html>