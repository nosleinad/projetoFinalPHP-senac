<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>DM Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../style.css" />
  
</head>
<body class="img-full">

<?php 
include_once("../classes/verifica.php");

?>

  <div class="container" >
    <div class="content">
      <div id="content">
            <h1>Alterar Curso</h1>
            <form method=post>
          
              <p>
                <label>Titulo:</label>
                <input type=text name=titulo required></input>
              </p><br>
              <p>
                <label>Descrição:</label>
                <textarea name=descricao></textarea>
              </p>
              <label>Valor:</label>
              <input type=number name=valor required step=0.01 placeholder=R$></input>
              <input type=submit name=Incluir value=Alterar></input>
              
            </form>  
            <button><a href="mantercurso.php">Voltar</a></button>    
        
        </div>
    </div>
 </div>  

    <?php

    require_once("../classes/funcoes_sql.php");

    $alimenta = new funcoes_sql;
    $alimenta->setconsulta("select * from curso");

    if(isset($_GET['id']) and isset($_POST['titulo']))
    {
      $id =  $_GET['id'];
      $titulo = $_POST['titulo'];
      $descricao = $_POST['descricao'];
      $valor = $_POST['valor'];
      
    $altera = new funcoes_sql;
    $altera->setconsulta("update curso set titulo = '".$titulo."', descricao = '".$descricao."', valor = '".$valor."' where pkcurso=$id");
    $altera->alterar();

    header("Location:mantercurso.php");
    }     
    ?>

</body>
</html>



