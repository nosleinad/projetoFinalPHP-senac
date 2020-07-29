<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> DM Cursos</title>
  <link rel="stylesheet" href="../style.css"/>
</head>

<body class="img-full">
  <div class="container" >
  
  <div class="content">  
	 
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post"> 
          <img class="logo_login" src="../img/login.png" alt="Logo Login">
		 
          <p> 
            <label for="nome_login">Login</label>
            <span class="obrigatorio"> * </span>
            <input id="login_login" name="login" required="required" type="text" placeholder="ex. miguel"/>
          </p>
           
          <p> 
            <label for="senha_login">Senha</label>
            <span class="obrigatorio"> * </span>
            <input id="senha_login" name="senha" required="required" type="password" placeholder="ex. 1234" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" name="Logar" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem acesso?
            Solicite ao Administrador. 
            <a href="../index.php">VOLTAR</a>
            
          </p>
        </form>
      </div>
  </div>
 

    <?php

      include_once("../classes/login.php");

      if(isset($_POST['Logar']))
      {
      $login = $_POST['login'];
      $senha = $_POST['senha'];

      $lg = new login;

        if(!$lg->logar($login,$senha))
        {
          echo "<div id='bg'>
                </div>
                <div class='box'>
                    <a href='index.php' id='close'>X</a>
                    <span class='autenticado'>Usuário não autenticado!</span>
                </div>";
        }
      }

    ?>
  </div>
</body>
</html>





