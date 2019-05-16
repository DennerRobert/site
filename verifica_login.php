<?php
session_start();

# "!" nega o if
if(!$_SESSION['usuario']){
	header('Location: login.html');
	exit();
}
