<?php

/**
Classe dos dados do usuário e verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */



if(!isset($_POST["email"])) 
{
	
	header("locatiom:index.php");
	
}

$email=$_POST["email"];
$nome=$_POST["nome"];
$senha= $_POST["senha"];	 


include_once("funcoes/cadastra-usuario.php");

cadastraUsuario($nome, $email, $senha);




?>


