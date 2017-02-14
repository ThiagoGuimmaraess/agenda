<?php

/**
Classe dos dados do usuário e verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php?erro=1");
	
     } 	
	 
	 
	 
include_once("../modulos/usuarioDados.php");




$verifica= new UsuarioDados();


$verifica->cadastra();




?>


