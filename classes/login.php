<?php
session_start();
include_once("funcoes_sql.php");

class login extends funcoes_sql
{
  function logar($login, $senha)
  {
     $log = new funcoes_sql;
	 $log->setconsulta("select pkusuario, nome, senha from usuario where login = '$login' ");
     if($log->contar() == 1)
	 {
	    foreach($log->selecionar() as $lg)
		{
		  if($lg[2]==$senha)
		  {
		     $_SESSION['nome'] = $lg[1];
             $_SESSION['logado'] = 'sim';
             header('Location:mantercat.php');			 
		  }else{
		     return false;
		  }
		}
	    
	 }else{
	    return false;
	 }
  }//fim do metodo logar
  
  function deslogar()
  {
    session_destroy();
	header('Location:../index.php');
  
  }
}
?>