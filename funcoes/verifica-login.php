<?php

/**
Função que chama método da classe UsuárioDados para verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php?erro=1");
	
     } 	
 function verificaLogin($email, $senha){
	 
include_once("./modulos/usuarioDados.php");




$verifica= new UsuarioDados();


$verifica->entra($email, $senha);


}


?>


