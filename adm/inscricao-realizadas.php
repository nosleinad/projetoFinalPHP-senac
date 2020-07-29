<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Inscrição Realizadas MD Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../style.css" />
  
</head>
<body class="img-full">
				<?php 
					include_once("../topo.php");
					include_once("../classes/verifica.php");
				?>
		<div class="container">
			
				<h3>Cadidatos Inscritos</h3>
			
					<?php
						include_once("../classes/funcoes_sql.php");
						$mostrar = new funcoes_sql;
						$mostrar->setconsulta("SELECT nome_aluno, email, fone, mensagem, titulo, data from curso INNER JOIN inscricao ON fkcurso=pkcurso ORDER by data ASC");
						if($mostrar->contar() > 0)
							{
									echo "<div class=tabelaCursos>";
									
									echo "<table>
											<tr>
											<th>NOME</th>
											<th>E_MAIL</th>
											<th>FONE</th>
											<th>MENSAGEM</th>
											<th>CURSO</th>
											<th>DATA</th>
											</tr>";
								foreach($mostrar->selecionar() as $m)
									{
												echo "<tr>
												<td>$m[0]</td>
												<td>$m[1]</td>
												<td>$m[2]</td>
												<td>$m[3]</td>
												<td>$m[4]</td>
												<td>$m[5]</td>
												</tr>
												";
										
									}
									echo "</div>";
							}
						?>
				
		</div>
	
</body>
</html>