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

	
include_once("../modulos/configuracao.php");
	
	
if(isset($_GET["contato"]))
{
	$contato=$_GET["contato"];
	
 
$query="SELECT * FROM  contatos WHERE email='".$_GET["contato"]."' ";

$resultado=$mysqli->query($query);

if($conta=mysqli_num_rows($resultado)<1)
{
	header("location:ver.php");
}


$res=mysqli_fetch_array($resultado);


}

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
		
			 
	 <form class="cadastra" action="edita-contato.php" id="form" method="post">
	
	   <ul>
	     <li>
	    <input  type="text" required  name="nome" value="<?=$res["nome"];?>" placeholder="nome"  />
		</li>
		
		<li>
		<input type="text" disabled="true" name="email" value="<?=$res["email"];?>" placeholder="email"  />
	    </li>
		
		<li>
		<input type="text" required name="telefone1"  value="<?=$res["telefoneUm"];?>" placeholder="telefone 1"  />
		</li>
		
		<li>
		<input type="text"   name="telefone2" value="<?=$res["telefoneDois"];?>"placeholder="telefone 2"  />
		</li>
		
		<li>		
		<input type="text"  name="endereco" value="<?=$res["endereco"];?>" placeholder="endereco"  />
		</li>
		
		<li>
		<input type="text" name="bairro" value="<?=$res["bairro"];?>" placeholder="bairro"  />
		</li>
		
		<li>
		<input type="text"   name="cidade"value="<?=$res["cidade"];?>" placeholder="cidade"  />
		</li>
		
		<li>
		<input type="text"   name="estado" value="<?=$res["estado"];?>" placeholder="estado"  />
		</li>
		</li>
		</br>
		<input type="text"  name="emailUsuario" value="<?=$_GET["contato"];?>" />
	
		<button type="submit" class="cadastrar" >salvar</button>
	  
	<ul>	
	</form>
			


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