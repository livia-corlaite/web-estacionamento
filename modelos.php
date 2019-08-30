<?php 

	$conexao = new PDO("mysql:host=localhost;dbname=estacionamento", "estacionamento", "joselia");

	$sql = "SELECT * FROM Modelo";
	$resultado = $conexao->query($sql);

	$clientes = $resultado->fetchAll();

	/*[
		[
			'cpf'=>'04080660608',
			'nome'=>'Livão',
			'dtNasc'=>'28/11/00'
		],
		[
			'cpf'=>'15107352604',
			'nome'=>'Livinha',
			'dtNasc'=>'14/01/02'
		]
	];*/
	  $mensagem = "";
  if (isset($_COOKIE['mensagem']))
  {
    $mensagem = $_COOKIE['mensagem'];
    // depois que exibo a mensagem, devo retirá-la
    // dos cookies.
    setcookie('mensagem', '', 1);
  }

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Modelos - IF Park</title>
 	<link rel="stylesheet" href="css/estilo.css">
 </head>
 <body>
 	
	<header>
		<h1>ℙ IF Park</h1>
	</header>
	<div id="container">
	
	      <?php if(!empty($mensagem)): ?>
				<div id="mensagem">
					<?= $mensagem; ?>
				</div>
			<?php endif; ?>
		<main>
			<h2>Modelo</h2>

			<table class="tabela-dados">
					<thead>
						<tr>
							<th>Código</th>
							<th>Descrição</th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($clientes as $cliente): ?>
						<tr>
							<td><?= $cliente['codmod'] ?></td>
							<td><?= $cliente['desc_2'] ?></td>
						
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>	
		</main>
	</div>
	<footer>
		<p>Desenvolvido com ♡ pelo Terceirão 2019.</p>
	</footer>

 </body>
 </html>