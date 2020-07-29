
<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> DM Cursos</title>
  <link rel="stylesheet" href="./style.css"/>
</head>

<body class="img-full">
  <div class="container" >
  
<?php $paginaLink = basename($_SERVER['SCRIPT_NAME']);?>
 <ul id="menu">
  <li><a href="mantercat.php" <?php if($paginaLink == 'mantercat.php') {echo 'class="ativo"';} ?>>Home</a></li>
  <li><a href="mantercurso.php" <?php if($paginaLink == 'mantercurso.php') {echo 'class="ativo"';} ?>>Cadastrar curso</a></li>
  <li><a href="cadastro.php" <?php if($paginaLink == 'cadastro.php') {echo 'class="ativo"';} ?>>Cadastrar usuário</a></li>
  <li><a href="inscricao-realizadas.php" <?php if($paginaLink == 'inscricao-realizadas.php') {echo 'class="ativo"';} ?>>Inscrições realizadas</a></li>
  <li><a href="../classes/logout.php">SAIR</a></li>
  </ul>


