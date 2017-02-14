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

     

	    <div id="acao">
		
			 
	 <form class="cadastra" action="cadastrar-contato.php" id="form" method="post">
	
	   <ul>
	     <li>
	    <input  type="text" required  name="nome" placeholder="nome"  />
		</li>
		
		<li>
		<input type="text"   name="email" placeholder="email"  />
	    </li>
		
		<li>
		<input type="text"  required name="telefone1" placeholder="telefone 1"  />
		</li>
		
		<li>
		<input type="text"  name="telefone2" placeholder="telefone 2"  />
		</li>
		
		<li>		
		<input type="text"   name="endereco" placeholder="endereco"  />
		</li>
		
		<li>
		<input type="text"   name="bairro" placeholder="bairro"  />
		</li>
		
		<li>
		<input type="text"   name="cidade" placeholder="cidade"  />
		</li>
		
		<li>
		<input type="text"   name="estado" placeholder="estado"  />
		</li>
		</li>
		</br>
		<input type="hidden" name="emailUsuario" value="<?=$usuario?>" />
	
		<button type="submit" class="cadastrar" >cadastrar</button>
	  
	<ul>	
	</form>
			
	 <?php 

if(isset($_GET["erro"]) && $_GET["erro"]="1")
{
	echo "<div>Este email já existe na lista de contatos.</div>";
	
}
	
?>

        </div>
	


   </section>

  
  
  <div align="center" style="margin-top:10px;"  id="verfoto" ></div>




<footer>
  <ul> 
    <li>
    <a href="index.php">Inicio</a> | <a href="adicionar.php">adicionar contato</a> | <a href="ver.php">Ver contatos</a>
    <li>
  </ul>
</footer>

 
</body>
</html>