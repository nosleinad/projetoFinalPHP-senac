<?php 
include("classes/funcoes_sql.php");

if(isset($_GET['acao']) and isset($_GET['id']))
{
  $acao = $_GET['acao'];
  $id = $_GET['id'];

}else{
  $acao = 'escolha';
  $id = 0;
}

if($acao == 'alterar')
{
   $alimenta = new funcoes_sql;
   $alimenta->setconsulta("select pkcurso, titulo, valor, desc_curso from curso where  pkcurso = $id");
  if($alimenta->contar() > 0)
  {
    foreach($alimenta->selecionar() as $valor)
	{
       echo "	   
	      <form method=post action=acoes.php?acao=gravar>
		  id     <input type=text name=pk value = $valor[0] readonly><br>
		  titulo <input type=text name=titulo value='$valor[1]'><br>
		  valor  <input type=text name=valor value='$valor[2]'><br>
		  descricao   <textarea  name=descricao>$valor[3]</textarea><br>
		             <input type=submit name=Gravar value=Gravar><br>
		  </form>
	   ";
	}
  }
}elseif($_GET['acao'] == 'gravar')
{
  $id   = $_POST['pk'];
  $titulo = $_POST['titulo'];
  $descricao   = $_POST['descricao'];
  $valor   = $_POST['valor'];
  
  if(!empty($titulo) and !empty($descricao))
  {
     $altera = new funcoes_sql;
     $altera->setconsulta("update curso  set titulo = '".$titulo."',desc_curso = '".$descricao."', valor = $valor  where pkcurso = $id");
     if($altera->alterar() == 0)
	 {
	  echo "alterdo com sucesso";
	  echo "<a href=index.php>Ir para pagina inicial</a>";
	 };
  }else{echo "teste";}
}elseif($_GET['acao'] =='excluir')
{
  $id = $_GET['id'];
  
  echo $id;
  $exclui = new funcoes_sql;
  $exclui->setconsulta("delete from curso where pkcurso = $id");
  if($exclui->excluir() == 0)
  {
	echo "Excluido com sucesso";
	echo "<a href=index.php>Ir para pagina inicial</a>";
  };
}
?>