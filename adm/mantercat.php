<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="../style.css" />
<?php 
  include_once("../topo.php");
  include_once("../classes/verifica.php");
  echo "<span class='usuario'>";
  echo " Seja bem vindo(a) " .$_SESSION['nome'];
  echo "</span>"; 

?>

    <div class="content">
      <div id="cadastrarCategoria">
        <h1>Cadastrar categoria</h1>

          <form method = post>
            <label>Informe o nome da categoria:</label>
            <input type=text name=novacat required></input>
            <input type=submit name=Ok value=Cadastrar></input>
          </form>

          <?php 

            include_once("../classes/funcoes_sql.php");

            if(isset($_POST['novacat']))
            {
              $categoria = $_POST['novacat'];
              
              $insere = new funcoes_sql;
              $insere->setconsulta("insert into categoria(desc_cat) values('".$categoria."')");
              $insere->inserir();

            }
            require_once("../classes/funcoes_sql.php");

            $seleciona = new funcoes_sql;
            $seleciona->setconsulta("select pkcategoria, desc_cat from categoria");

            if($seleciona->contar() > 0)
            {
              echo "<table border=1>";
              foreach($seleciona->selecionar() as $valor)
              {
                echo "
                  <tr>
                  <td>$valor[1]</td>
                  <td class=alterar><a href=altcat.php?id=$valor[0]>Alterar</a></td>
                    <td class=excluir><a href=exccat.php?id=$valor[0]>Excluir</a></td>
                </tr>
              ";
                
              }
              echo "</table>";
            }else{
              echo "Tabela esta vazia";
            }

          ?>
        </div>
    </div>
    
  </div>
</body>
</html>