<?php

/**
Classe dos dados do usuário e verificação de login do usuário
*
*@author Thiago Guimarães <thiagoguimaraess_16@hotmail.com>
*@version 1.0 Exemplo
 */


/* protege script contra acesso direto */ 
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0 ){
     	
	      header("location:../index");
	
     } 	

   class UsuarioDados
  {

  
  
  
  

   public $nome;
   public $email;
   public $senha;
  
  
  
  

	 public  function verificaEmail($email){
		 
    
	
	
	 
       include("configuracao.php");
	   $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" ';
	   $resultado= $mysqli->query($query);
       echo $mysqli->error;
      
       $conta=mysqli_num_rows($resultado);
	   echo $mysqli->error;

	   if($conta>0){		   
	    
		   header("location: ./cadastrar.php?erro=1");
		    
			/* usar a função close para garantir o encerramento do comando e conexao sql */			   
		   $mysqli->close();
       
	        /* exit (1)  para garantir a finalização da execução e evitar inserção quando já houver cadastrado o email inserido */	  
		    exit(1);
			
 
	   }    
	  

    
	
 }
 
	 /* cadastra usuário inserindo os dados do formulário no banco */	

     public  function cadastra($nome, $email, $senha){
     
	 
		  
		  
	        $this->verificaEmail($email);	  
	 
	        $senhaencripitada=base64_encode(md5($senha)); 
	 
	 
             include("configuracao.php");
	         $query = 'INSERT INTO utilizador (nome, email, senha)  VALUES ("'.$nome.'", "'.$email.'", "'.$senhaencripitada.'" ) ';
	 
	         $insere= $mysqli->query($query);
     
	         if($insere)
	 
	          {
				  /* cria sessão */
		        $_SESSION["usuario"]=$email;
		        header("location: usuario/index.php");
		 
	        }
			
	         $mysqli->error; 
          /* usar a função close para garantir e facilitar o encerramento do comando e conexao sql */			   
	         $mysqli->close();
   }
	
	
  
  
  
  
	/* faz login do usuário em seu painel de controle */	

   public  function entra($email, $senha) {
	   
	   

            
            include("configuracao.php");
		
	        $senhaencripitada=base64_encode(md5($senha)); 
     
            $query = 'SELECT * FROM utilizador WHERE email = "'.$email.'" and senha= "'.$senhaencripitada.'" ';
            $resultado=  $mysqli->query($query);
	  
	  
               $conta=mysqli_num_rows($resultado);
	   
	        if($conta>0)
			
			  {	 
					   session_start();
                       $_SESSION["usuario"]=$email;				   
	                   header("location:usuario/index.php");
					   
                }  
					
			 else
		    {
						
					   header("location:./index.php?erro=1");
						
		     }
					
  
   	
	   }

	   
	   


  }




?>