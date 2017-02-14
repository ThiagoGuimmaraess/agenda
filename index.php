<!doctype html>

<html>



   <head>
   <title>e-ContactBook: Sistema de agenda de contatos online!</title>
   
  <link rel="stylesheet" href="css/estilo.css" />

   
<style>
.erro{color:red; text-align:center; font-family:arial}
</style>

   </head>
   
   
   
 
  
  
    <body>
    
	
	<header>
	
         
			
    </header>
	
	
	
	<section id="caixa">
	
	
	   <ul>
	     <li>
		 
	       <img id="icone" src="imagens/econtact book.png" /> 
	  
	  
	          <form id="formulario" method="post" action="verifica.php">
	   
	       <input  placeholder="email" type="email" name="email" />
	   
	       <input placeholder="senha" type="password" name="senha" />
		   <button id="botao" type="submit">entrar </button>
		   </form>
		   
	    </li>
	  </ul>
	  
	       </form><p class="erro"> <?php if(isset($_GET["erro"]) && $_GET["erro"]=="1" ){ echo  "Usuário ou senha errados";}       ?></p>
	
	<h1>Sua agenda de contatos virtual! Acesse de onde quiser!</h1>
	<p align="center" style="font-family:arial; font-size:14px; color: black; margin-top:10px"><a style="color: black" href="cadastrar.php"> não tem uma conta Cadastre-se!</a></p>
	</section>
	
	
	




  </body>
</html>