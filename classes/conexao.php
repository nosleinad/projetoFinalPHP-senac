<?php

class conexao{

  private $host = "127.0.0.1";
  private $user = "root";
  private $pass = "";
  private $db   = "curso";
  private $con;
  
  function __construct()
  {
    $this->conecta();
  }
 
  function conecta()
  {
    $con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
	
	if(mysqli_connect_error())
	{
	   throw new Exception("Erro ao conectar".mysqli_connect_error(),1);
	   return $con;
	}else{
	  return $con;
	}
 
  }
}

?>