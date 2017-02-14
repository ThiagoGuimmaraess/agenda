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
	  
	  
	          <form id="formulario" method="post" action="cadastra.php">
	   	      
			   <input placeholder="nome" type="texto" name="nome" />
	           <input  placeholder="email" type="email" name="email" />	   
	           <input placeholder="senha" type="password" name="senha" />
		       
			   
			   <button id="botao" type="submit">cadastrar </button>
		   
		   </form>
		   
	    </li>
	  </ul>
	  
	       </form><p class="erro"> <?php if(isset($_GET["erro"]) && $_GET["erro"]=="1" ){ echo  "esse email já existe";}       ?></p>
	
	<p align="center" style="font-family:arial; font-size:14px; color: black; margin-top:10px"><a style="color: black" href="index.php"> Já tem conta? Entre!</a></p>
	</section>
	
	
	




  </body>
</html>