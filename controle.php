<?php

if(isset($_GET['pagina']))
{
  $pagina = $_GET['pagina'];
}else{
  $pagina = '';
}


switch($pagina)
{
   case 'busca':
     include_once("buscar.php");
	 break;
   default:
     include("inicial.php");
	 break;
	 
}


?>