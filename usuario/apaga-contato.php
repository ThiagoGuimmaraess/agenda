<?php

/**
Chama a função para apagar um contato  na agenda 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


include_once("../funcoes/seguranca.php");


include_once("./funcoes/apagar-contato.php");

  verificaSessao();

  
  
  
  if($_SERVER["REQUEST_METHOD"]!=="GET")
  {
	  
	 header("location:index.php");
	 exit(1);
  }
  
  $contato=$_GET["contato"];
  
  if(!isset($contato))
  {
	  
	  header("location:index.php");
	  
  }

  
	 
 apagaContato($contato);        


 

?>
