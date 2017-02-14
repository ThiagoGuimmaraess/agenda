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

$senha= $_POST["senha"];	 


include_once("funcoes/verifica-login.php");

verificaLogin($email, $senha);




?>


