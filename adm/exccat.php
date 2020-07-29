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
        <div id="excluir">
          <?php 
          include_once("../classes/funcoes_sql.php");
          $id = $_GET['id'];
          $nome = new funcoes_sql;
          $nome->setconsulta("select desc_cat from categoria where pkcategoria=$id");

          if($nome->contar() > 0)
          {
            foreach($nome->selecionar() as $n)
            {
              echo "<form method=post>
                        <label>Deseja realmente excluir a categoria: $n[0]</label>
                        <input type=submit name=Ok value=EXCLUIR>
                        <input type=submit name=Cancelar value=CANCELAR>
                      </form>";
              
            }
            
            
          }

          if(isset($_POST['Ok']))
          {
            $id = $_GET['id'];
            $exclua = new funcoes_sql;
            $exclua->setconsulta("delete from categoria where pkcategoria=$id");
            $exclua->excluir();
            
            header("Location:mantercat.php");
      
            
          }elseif(isset($_POST['Cancelar']))
          {
            header("Location:mantercat.php");
            
          }
          ?>  
        <div>
      </div>
  </div>
</body>
</html>
