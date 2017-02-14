<?php

/**
Função para pesquisar contato 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */

include_once("../funcoes/seguranca.php");


verificaSessao();

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php");
	
     } 	
	 
	 
	 function apagaContato($contato){
	 
   
         include_once("../modulos/configuracao.php");
		 
		 
		 
		 
		 $query="DELETE  FROM contatos WHERE email = '".$contato."' ";
		 
		$resultado= $mysqli->query($query);
		
		if($resultado){	header ("location:./ver.php");	}
		
		 
		 
		 
		 
		 
		 




        


 }

?>
