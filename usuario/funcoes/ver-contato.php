
<?php

/**
Função para cadastrar um item na agenda 
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */

include_once("seguranca.php");


verificaSessao();

$usuario=$_SESSION["usuario"];

/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index.php");
	
     } 	
	 ?>
	 
<style>

.nome
{
background-color:white;
border-radius:10px;
padding-top:10px;
width:auto;
height:30px;	
	
}
.contato

{
	


	font-weight:bold;
	color:/*#54547f;*/#161677;
	
}
.contato

{
	



	

	
}


</style>

<?php
	 
	 function verContato($emailUsuario){
	 
   
         include_once("../modulos/configuracao.php");
		 $usuario=$_SESSION["usuario"];
		 
		 if($emailUsuario!==$usuario)
		 {
			 
		$query="SELECT * FROM contatos WHERE email = '".$emailUsuario."' ";	
		$resultado= $mysqli->query($query);
		$conta=mysqli_num_rows($resultado);
		if($conta<1)
		{
			echo "não há contatos para mostrar";
			
		
		} 
			
	
		$res=mysqli_fetch_array($resultado);
		{
			echo "<div  class='contato' align='center' style='padding-top:30px; '>";
			echo "<ul>";
			 
			echo "<p class='nome'>".$res["nome"]."</p>" ." </br>"." </br>";
			echo $res["telefoneUm"]." </br>";
			echo $res["telefoneDois"]." </br>";
			echo $res["email"]." </br>"." </br>";
		    echo $res["endereco"]." ".$res["bairro"]." </br>";
		    
			echo $res["cidade"]." ".$res["estado"]."</br>";
			echo"</br>";
			echo "<a style='color:green' href='editar-contato.php?contato=".$res["email"]."'>editar</a>". " "."<a style='color:red' href='apaga-contato.php?contato=".$res["email"]."'>apagar</a>";
			echo "</ul>";
		echo "</div>";	

		}
		
		 
		

			
			 
		 }
		 else
		 {
		 
		 /* verifica se existe contatos */
        $query="SELECT * FROM contatos where emailUsuario = '".$emailUsuario."' ";	
		$resultado= $mysqli->query($query);
		$conta=mysqli_num_rows($resultado);
		if($conta<1)
		{
			echo "não há contatos para mostrar";
			
		
		} 
		
		
		while($res=mysqli_fetch_array($resultado))
		{
			echo "<div  class='contato' align='center' style='padding-top:30px; '>";
			echo "<ul>";
			 
			echo "<p class='nome'>".$res["nome"]."</p>" ." </br>"." </br>";
			echo $res["telefoneUm"]." </br>";
			echo $res["telefoneDois"]." </br>";
			echo $res["email"]." </br>"." </br>";
		    echo $res["endereco"]." ".$res["bairro"]." </br>";
		    
			echo $res["cidade"]." ".$res["estado"]."</br>";
			echo"</br>";
			echo "<a style='color:green' href='editar-contato.php?contato=".$res["email"]."'>editar</a>". " "."<a style='color:red' href='apaga-contato.php?contato=".$res["email"]."'>apagar</a>";
			echo "</ul>";
		echo "</div>";	
		echo " </br>"." </br>";
		echo "<div style='clear:both'></div>";
		}
		 
		

  }
        


 }

?>
