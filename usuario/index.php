<?php 
/* ********* 


*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
*
*

*********** */

include_once("../funcoes/seguranca.php");



$usuario=$_SESSION["usuario"];
$email=$usuario;

verificaSessao($email);

		
	 


 ?>

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



    <section style="margin-top:30px">
	
	
	<div align="center" id="caixa">
		 
	 <form action="pesquisa-contato.php" id="form" method="get">
	
	    <input type="text"  name="pesquisa" placeholder="pesquisar contato" class="pesqisar" />
		<button type="submit" class="pesquisar" >pesquisar</button>
	
	</form>
     

	    <div id="acao">
	    
		
		 <a  class="adicionar" style="color:black; text-decoration:none" href="adicionar.php"><span style="font-size:130px;">+</span><p> adicionar um contato</p></a>
			
	 

        </div>
	


   </section>

  
  
  <div align="center" style="margin-top:10px;"  id="verfoto" ></div>




<footer>
  <ul> 
    <li>
    <a href="index">Inicio</a> | <a href="adicionar.php">adicionar contato</a> | <a href="ver.php">Ver contatos</a>
    <li>
  </ul>
</footer>

 
</body>
</html>