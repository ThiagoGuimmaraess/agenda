<?php

/**
Função que chama método da classe UsuárioDados para cadastrar um usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php");
	
     } 	
	 
	 
	 function cadastraUsuario($nome, $email, $senha){
	 
   
         include_once("./modulos/usuarioDados.php");




         $cadastra= new UsuarioDados();


         $cadastra->cadastra($nome, $email, $senha);


 }

?>


