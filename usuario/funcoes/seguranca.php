<?php
/**
Classe dos dados do usuário e verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */




/* segurança da sessão */ 




/* inicia a sessao */
session_start();

/* nível de segurança médio (o bastante para prevenir a maioria dos ataques de sessão)  */


 function verificaSessao()

   {
	
	/* verifica se está logado e se o acesso vem de um naveador */
	if(isset($_SESSION["usuario"]) && isset($_SERVER['HTTP_USER_AGENT'])  )
	
	{
		/*gera um id diferente da sessão para evitar acesso por outro usuário da sessão do usuário anterior utilizando o mesmo id */
		session_regenerate_id();
		return true;
		
		
		
	 } 
	 
	 else
	 {
		 header("location:../index.php");
		 /* exit (1)  para garantir a finalização da execução */
		 exit(1);
		 
		 
	 }
	
   
	
	
 }

?>