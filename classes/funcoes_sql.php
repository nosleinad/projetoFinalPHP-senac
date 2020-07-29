<?php 
include_once("conexao.php");

class funcoes_sql extends conexao{
   //Atributos
   private $consulta;
   private $retorno;
   private $ret;
   private $la;
   private $total;
   //Métodos acessores
   function setconsulta($sql)
   {
      $this->consulta = $sql;
   }
   
   function getconsulta()
   {
     return $this->consulta;
   }
   //MÉTODOS DA CLASSE
   //inicio do metodo que seleciona os resgistros
   function selecionar()//EXECUTAR UM SELECT NO BANCO DE DADOS
   {
     $qry = mysqli_query($this->conecta(),$this->getconsulta());
	 while($linha = mysqli_fetch_array($qry))
	 {
	   $this->ret[] = $linha;
	 }
	 return $this->ret;
   }//fim do metodo selecionar
   
   //inicio do metodo que apaga registros
   function excluir()
   {
     $qry  = mysqli_query($this->conecta(),$this->getconsulta())or die ("Erro ao executar a query".mysqli_error($this->conecta()));
	 
	 $this->la = mysqli_affected_rows($this->conecta());
	 
	 return $this->la;
   }//fim do metodo excluir
   
   function alterar()
   {
     $qry  = mysqli_query($this->conecta(),$this->getconsulta())or die ("Erro ao executar a query".mysqli_error($this->conecta()));;
	 
	 $this->la = mysqli_affected_rows($this->conecta());
	 
	 return $this->la;
   }//fim do metodo alterar
   
   function inserir()
   {
     $qry  = mysqli_query($this->conecta(),$this->getconsulta())or die ("Erro ao executar a query".mysqli_error($this->conecta()));;
	 
	 $this->la = mysqli_affected_rows($this->conecta());
	 
	 return $this->la;
   }//fim do metodo inserir
   
   
   function contar()
   {
     $qry = mysqli_query($this->conecta(), $this->getconsulta());
	 $this->total = mysqli_num_rows($qry);
	 return $this->total;
   }
}
?>











