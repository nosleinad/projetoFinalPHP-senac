<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastrar Curso MD Cursos</title>
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
		
				<div id="cadastrarCurso">
					<h1>Cadastrar curso</h1>

					<?php 

					include_once("../classes/funcoes_sql.php");
					$alimenta = new funcoes_sql;
					$alimenta->setconsulta("select * from categoria");

					if($alimenta->contar() > 0)
					{
						echo "
								<form method=post action=?acao=gravar>
								<label>Titulo:</label>
								<input type=text name=titulo required></input>
								<p>
								<br><label>Descrição:</label>
								<textarea name=descricao></textarea>
								</p>
								<label>Escolha a categoria:</label>
								<br><select name=categoria>	";
							foreach($alimenta->selecionar() as $v)
							{
								echo "<option value=$v[0]>$v[1]</option>";
								
							}
							echo "</select><br><br>
							<label>Valor:</label>
							<input type=number name=valor step=0.01 placeholder=R$></input>
								<input type=submit name=Incluir value=Incluir></input>";
					}
					?>
				
				</div>
		</div>


		<div class="cadastrar-curso">
		
			<h3>Cursos Cadastrados</h3>
			<div>

				<?php

				if(isset($_POST['Incluir']) and $_GET['acao']=='gravar')
				{
					$titulo = $_POST['titulo'];
					$descricao= $_POST['descricao'];
					$valor= $_POST['valor'];
					$fk= $_POST['categoria'];
					$insere = new funcoes_sql;
					$insere->setconsulta("insert into curso(titulo,descricao,valor,status,fkcategoria) values('".$titulo."','".$descricao."',$valor,1,$fk)");
					$insere->inserir();
					
					header("Location:mantercurso.php");
				}



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
								<th class=alterar><a href=altcurso.php?id=$m[0]>Alterar</a></th>
								<th class=excluir><a href=exccurso.php?id=$m[0]>Excluir</a></th>
								</tr>
							";
						
					}
					echo "</div>";
				}
		
				?>
			
			</div>
		</div>
		
	</div>
	
</body>
</html>

