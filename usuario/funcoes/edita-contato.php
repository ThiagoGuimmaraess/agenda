<?php

/**
Função para editar um contato da agenda 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */




verificaSessao();

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php");
	
     } 	
	 
	 
	 function editaContato($nome, $telefone1,$telefone2, $endereco, $bairro, $cidade, $estado, $emailUsuario ){
	 
   
         include_once("../modulos/configuracao.php");
		 
	
		 
		 
        $query="UPDATE contatos set  nome='".$nome."', telefoneUm='".$telefone1."', telefoneDois='".$telefone2."', endereco='".$endereco."', bairro='".$bairro."', cidade='".$cidade."', estado='".$estado."' WHERE email= '".$emailUsuario."' ";	
		$mysqli->query($query);
		
		if($mysqli)
		
		{
			
		header("location:./ver.php");	
			
			
		}




        


 }

?>
