<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<title>Clientes - IF Park</title>
 	<link rel="stylesheet" href="css/estilo.css">
 </head>
 <body>
 	
	<header>
		<h1>ℙ IF Park</h1>
	</header>
	<div id="container">
		<main>
			<h2>Clientes</h2>

			<form action="clientes.php" method="post">

<label for="usuariom">

	<p>
		CPF
	</p>
 </label>

 <input type="text" id="usuariom" name="cpf">

<label for="nome">

<p >
Nome

 </p>

 <input type="text" id="nome" name="name">
 </label>

<label for="nasc">

 <p>
Data de nascimento

 </p>

 <input type="date" id="nasc" name="data">
 </label>
 <br>
 <br>

<button type="submit"> Salvar</button>


</form>	
		</main>
	</div>
	<footer>
		<p>Desenvolvido com ♡ pelo Terceirão 2019.</p>
	</footer>

 </body>
 </html>

