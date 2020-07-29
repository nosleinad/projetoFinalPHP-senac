<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>DM Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body class="img-full">

  <div class="container">
			<div class="buscar">
				<span><a href="buscar.php">Pesquisar Curso</a></span>
			</div>
			<div class="acessoAdm">
				<span><a href="./adm/index.php">Acesso Administrativo</a></span>
			</div>
			
					<h1>Inscreva-se</h1>
				<div class="textohome">	
					<p>Faça aqui o cadastro para o curso de seu interesse nas escolas do MD Cursos.</p>
					
					<h3>Qualificação Profissional</h3>
					
					<p>São cursos que qualificam profissionalmente em determinada área, incorporando conhecimentos teóricos, técnicos e operacionais.</p> 
					<p>A carga horária pode variar de 160 a 460 horas-aula.</p>
  
				</div>
  	
  
				<?php
					include_once("./classes/funcoes_sql.php");
					$mostrar = new funcoes_sql;
					$mostrar->setconsulta("select pkcurso, titulo, descricao, valor, desc_cat from curso, categoria where pkcategoria = fkcategoria");
					if($mostrar->contar() > 0)
					{
						echo "<div class=tabelaCursos>";
					
						echo "<table>
							<tr>
							<th>TÍTULO</th>
							<th>DESCRIÇÃO</th>
							<th>VALOR</th>
							<th>CATEGORIA</th>
							</tr>";
					
						foreach($mostrar->selecionar() as $m)
						{
								echo "<tr>
										<td>$m[1]</td>
								<td>$m[2]</td>
								<td>R$ $m[3]</td>
								<td>$m[4]</td>
								<th class=alterar><a href=pre-matricula.php?id=$m[0]>Inscreva-se</a></th>
								</tr>
							";
						
						}
						echo "</div>";
					}						
				?>

				
		</div>
		
		
</body>
</html>


