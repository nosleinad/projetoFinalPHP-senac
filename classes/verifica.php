<?php 
session_start();

if(!isset($_SESSION['logado']))
{
   
echo header("Location:index.php");
   
}

?>