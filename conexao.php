<?php
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','cadastros');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi podssivel conectar ao banco!');