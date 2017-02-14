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
	 
	 ?>
	 
	 <style>
	 body{

	 font-family:arial;
	 
	 font-size:19px;
	 
	 }
	 
	 </style>
	 
	 <?php
	 function pesquisaContato($pesquisa ){
	 
   
         include_once("../modulos/configuracao.php");
		 
		 
		 
		 
		 $query="SELECT * FROM contatos WHERE nome like '".$pesquisa."%' ";
		 
		$resultado= $mysqli->query($query);
		 
		 if($conta=mysqli_num_rows($resultado)<1){echo "não há contatos com esse termo pesquisado"." "."<a href='index.php'>voltar</a>";}
		 
		 while($res=mysqli_fetch_array($resultado))
		 {
			 echo "<div align='center'>";
			 echo $res["nome"];echo "</br>";
			 echo $res["email"];echo "</br>";
			 echo $res["telefoneUm"];echo "</br>";echo "</br>";
			  echo $res["telefoneDois"];echo "</br>";echo "</br>";

			 echo " <a href=ver.php?contato=".$res['email'].">ver contato</a>";
			 echo "</div>";echo "</br>";echo "</br>";
		 }
		 
		 
		 
		 
		 
		 




        


 }

?>
