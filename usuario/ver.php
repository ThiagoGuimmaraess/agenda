<?php 
/* ********* 


*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
*
*

*********** */


include_once ("funcoes/ver-contato.php"); 


$usuario=$_SESSION["usuario"];


verificaSessao($usuario);

		
	 


 ?>
<style>
.rodape{
	position: relative; 
    bottom: 0px; 
    width: 100%; 
    height: 100px; 
	color:gray;
	margin-top:100px;
}
</style>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
     <meta charset="UTF-8"/>

	  <!-- melhor visualização em dispositivos móveis -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
     <title>E-Contact Book: Sua agenda</title>
	 <link rel="stylesheet" href="../css/estilo.css" />
	  <link rel="stylesheet" href="css/painel.css" />
	  
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	  <script src="http://malsup.github.com/jquery.form.js"></script> 
	    
	 
	 
 </head>
 <body>

 
 <?php 
echo '<div id="usuario" style="margin-bottom:10px"> '.$usuario.'</div>';	

echo '<a style="margin-left:25px; color:black " href="sair.php">sair da conta</a>';
		


		
?>	


<?php 

if(isset($_GET["contato"]))
{
	$contato=$_GET["contato"];
	$emailUsuario=$contato;

	?>


	<section style="margin-bottom:330px;">
	
	
	  <div  align="center" style="margin-bottom:100px" id="caixa">

	   <?php verContato($emailUsuario); ?>
	
       </div>
	  

   </section>

   
	<?php
	
} else
{
	?>
	
	<section style="margin-bottom:330px; position:relative">
	
	
	<div align="center"    id="caixa">

	<?php $emailUsuario=$usuario; verContato($emailUsuario); ?>
	
    </div>
	  

   </section>
	<?php
}

?>




<div style="clear:both"></div>
<footer class="rodape">
  <ul> 
    <li>
    <a href="index.php">Inicio</a> | <a href="adicionar.php">adicionar contato</a> | <a href="ver.php">Ver contatos</a>
    <li>
  </ul>
</footer>

 
</body>
</html>