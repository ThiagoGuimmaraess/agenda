<?php

/**
Chama a função para pesquisar um contato  na agenda 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


include_once("../funcoes/seguranca.php");
include_once("./funcoes/pesquisar-contato.php");

  verificaSessao();

  
  
  
  if($_SERVER["REQUEST_METHOD"]!=="GET")
  {
	  
	 header("location:index.php");
	 exit(1);
  }
  
  $pesquisa=$_GET["pesquisa"];
  
  if(!isset($pesquisa))
  {
	  
	  header("location:index.php");
	  
  }

  
	 
     pesquisaContato($pesquisa);        


 

?>
