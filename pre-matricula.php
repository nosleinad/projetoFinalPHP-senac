<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Inscreva-se MD Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body class="img-full">
 
  <div class="container" >
      <h1>Cadastro de Interesse</h1>
  
      <div class="content"> 
        <div id="matricula">
 
          <!--FORMULÁRIO DE INTERESSE-->

          <h3>Dados Pessoais </h3> 
          <form method="post"> 
  
              <p> 
                <label>Seu nome</label>
                <span class="obrigatorio"> * </span>
                <input id="nome" name="nome" required="required" type="text" placeholder="Nome Completo"/>
              </p>
      
              <p> 
              <br><label>Seu e-mail</label>
              <span class="obrigatorio"> * </span>
              <input id="email_login" name="email" required="required" type="email" placeholder="ex. francisco@email.com" /> 
              </p>
              <p> 
              <label>Telefone</label>
              <span class="obrigatorio"> * </span>
              <input id="nome" name="telefone" required="required" type="number" placeholder="ex.1234-5678"/>
              </p>
              <p>
              <label>Mensagem</label>
              <textarea name=mensagem></textarea>
              </p>
              <input type=submit name=Enviar value=Enviar></input>
              
            </form>
            <button><a href="index.php">Voltar</a></button>
          </div>  
      </div>
  </div>
</body>
</html>

<?php
include_once("classes/funcoes_sql.php");

if(isset($_GET['id']) and isset($_POST['Enviar']))
{
	$id = $_GET['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
  
  $insere = new funcoes_sql;
  $insere->setconsulta("insert into inscricao(nome_aluno,email,fone,mensagem,data,fkcurso) values('".$nome."','".$email."','".$telefone."','".$mensagem."',curdate(),'".$id."')");
  $insere->inserir();
  header("Location:index.php");

}
 ?>
 

  
  