<?php

/**
Função para cadastrar um item na agenda 
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
	 
	 
	 function cadastraContato($nome, $email, $telefone1,$telefone2, $endereco, $bairro, $cidade, $estado, $emailUsuario ){
	 
   
         include_once("../modulos/configuracao.php");
		 
		 /* verifica se email já existe nos contatos */
        $query="SELECT * FROM contatos where email = '".$email."' ";	
		$resultado= $mysqli->query($query);
		$conta=mysqli_num_rows($resultado);
		if($conta>0)
		{
			header("location:adicionar.php?erro=1");
			
			exit(1);
		}
		 
		 
		 
        $query="INSERT INTO contatos (nome, email, telefoneUm, telefoneDois, endereco, bairro, cidade, estado, emailUsuario) VALUES  ('".$nome."', '".$email."', '".$telefone1."', '".$telefone2."', '".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$emailUsuario."') ";	
		$mysqli->query($query);
		
		if($mysqli)
		
		{
			
		header("location:./ver.php");	
			
			
		}




        


 }

?>
