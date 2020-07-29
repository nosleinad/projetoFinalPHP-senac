<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastrar usuario DM Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body class="img-full">
  <div class="container" >

    <?php 
      include_once("../topo.php");
      include_once("../classes/verifica.php");
      
    ?>
   
    <div class="content">  
            
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="?acao"="gravar"> 
          <img class="logo_login" src="../img/cadastro.png" alt="Logo cadastrar-usuario">
                
          <p> 
            <label for="nome_cad">Seu Nome</label>
              <span class="obrigatorio"> * </span>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Nome Completo" />
          </p>
          
          <p> 
            <label for="login_cad">Login</label>
              <span class="obrigatorio"> * </span>
            <input id="login_cad" name="login" required="required" type="text" placeholder="ex. miguel"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Senha</label>
              <span class="obrigatorio"> * </span>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
          
          <p> 
            <input type="submit" name="cadastrar" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Solicite ao usuário que realize a troca da senha no seu primeiro acesso.
          </p>
        </form>
      </div>
    </div>  
 

    <?php
      include_once("../classes/funcoes_sql.php");

      if(isset($_POST['cadastrar']))
      {
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $insere = new funcoes_sql;
        $insere->setconsulta("insert into usuario(nome,login,senha) values('".$nome."','".$login."','".$senha."')");
        $insere->inserir();
        echo "<div id='bg'>
                      </div>
                      <div class='box'>
                          <a href='cadastro.php' id='close'>X</a>
                          <span class='autenticado'>Usuário cadastrado com sucesso!</span>
                      </div>";
        

      }
    ?>
 </div> 
  
  </body>
  </html>