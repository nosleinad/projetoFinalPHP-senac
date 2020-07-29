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
    <div class="container">
        <div class="content">
            <div id="content">
                <form method = post>
                    <label>Informe a nova categoria:</label>
                    <input type=text name=novacat required></input>
                    <input type=submit = name=Ok value=ALTERAR></input>
                </form>

                <button><a href="mantercat.php">VOLTAR</a></button>
            </div>
        </div>
    </div>
  <?php 

    require_once("../classes/funcoes_sql.php");

    if(isset($_GET['id']) and isset($_POST['novacat']))
    {
      $id =  $_GET['id'];
      $nova = $_POST['novacat'];
      
    $altera = new funcoes_sql;
    $altera->setconsulta("update categoria set desc_cat = '".$nova."' where pkcategoria=$id");
    $altera->alterar();

    header("Location:mantercat.php");

    }
  ?>

</body>
</html>


