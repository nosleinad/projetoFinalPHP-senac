<!DOCTYPE html>
<head>
  <meta charset="UTF-8"/>
  <title>DM Cursos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body class="img-full">
	<div class="container">
		<div class="content">
			<div id="pesquisa">
		
				<h3>Pesquise o curso de seu interesse</h3>
				<form method=post>
					<input type="text" name="chave" placeholder="Informe o curso..."/>
						<input type=submit name="Buscar" class="btnBusca" value=Buscar></input>
					
				</form>
				<button><a href="index.php">Voltar</a></button>
			</div>
		</div>

			<?php 


				if(isset($_POST['Buscar']))
				{
					include("classes/funcoes_sql.php");
					$chave = $_POST['chave'];//usuario digitou
					
					$busca = new funcoes_sql;
					$busca->setconsulta("SELECT pkcategoria, pkcurso, desc_cat, titulo, descricao from categoria inner join curso on fkcategoria=pkcategoria where (desc_cat like '%$chave%' or titulo like '%$chave%' or descricao like '%$chave%') ");
					
					echo "<h3>Resultados da Pesquisa</h3>";
					
					if($busca->contar() > 0)
					{
						echo "<div class=tabelaCursos>";
								
								echo "<table>
										<tr>
										<th>CATEGORIA</th>
										<th>TÍTULO</th>
										<th>DESCRIÇÃO</th>
										</tr>";
						foreach($busca->selecionar() as $b)
					{
						//echo $b[2]." <a href=#>clique aqui para inscrição</a><br>";
						echo "<tr>
							<td>$b[2]</td>
							<td>$b[3]</td>
							<td>$b[4]</td>
							<th class=alterar><a href=pre-matricula.php?id=$b[0]>Inscreva-se</a></th>
							</tr>
						";
					}
					echo "</div>";
					
						}else{
						
								echo "<div id='bg'>
								</div>
								<div class='box'>
										<a href='buscar.php' id='close'>X</a>
										<span class='autenticado'>Nenhuma correspodencia encontrada!</span>
								</div>";
						}

				}
			?>
		
	</div>
</body>
</html>
