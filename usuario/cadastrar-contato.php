<?php

/**
Chama função para cadastrar um contato na agenda 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


include_once("../funcoes/seguranca.php");
include_once("funcoes/cadastra-contato.php");

  verificaSessao();

  
  
  
  if($_SERVER["REQUEST_METHOD"]!=="POST")
  {
	  
	 header("location:index.php");
	 exit(1);
  }

  if(!isset($_POST["nome"]))
  {
	  
	  header("location:index.php");
	  exit(1);
  
  
  }
  
  
  $nome=$_POST["nome"];
  $email=  $_POST["email"]; 
  $telefone1= $_POST["telefone1"];
  $telefone2=$_POST["telefone2"];
  $endereco= $_POST["endereco"];
  $bairro=$_POST["bairro"];
  $cidade=$_POST["cidade"];
  $estado=$_POST["estado"];
  $emailUsuario=$_POST["emailUsuario"];
	 
  cadastraContato($nome, $email, $telefone1, $telefone2, $endereco, $bairro, $cidade, $estado, $emailUsuario );
		
		
		
		
		
	 
   
       
		 
		 
		 




        


 

?>
