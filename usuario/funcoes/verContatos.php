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
	 
	 
	 function verContato(){
	 
   
         include_once("../modulos/configuracao.php");
		 
		 /* verifica se existe contatos */
        $query="SELECT * FROM contatos where email = '".$email."' ";	
		$resultado= $mysqli->query($query);
		$conta=mysqli_num_rows($resultado);
		if($conta<1)
		{
			echo "não há contatos para mostrar";
			
		
		} 
		
		
		while($res=mysqli_fetch_array($resultado))
		{
			
			echo $res["nome"];
			
			
		}
		 
		


        


 }

?>
