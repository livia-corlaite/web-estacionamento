<?php
  var_dump($_POST);

  if(count($_POST)>0){
     $banco="estacionamento";
     $usuario="estacionamento";
     $senha="joselia";


     $conexao = new PDO("mysql:host=localhost;dbname=${banco}", $usuario, $senha);

     $sql = "Insert into Modelo values (?,?)";

     $comando = $conexao->prepare($sql);
     $sucesso= $comando->execute([
       $_POST['cod'],
       $_POST['des']

     	]);

     $mensagem = '';
  if ($sucesso)
  {
    $mensagem = "Modelo cadastrado!";
  }
  else
  {
    
    $mensagem = "Erro: " . $comando->errorInfo()[2];
  }
  
  setcookie('mensagem', $mensagem);
 

     header('Location: modelos.php');



  }

?>



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
			<h2>Cadastro de Modelo</h2>

			<form action="cadastrodemodelos.php" method="post">

<label for="codigo">

	<p>
		Código
	</p>
 </label>

 <input type="text" id="codigo" name="cod">

<label for="descricao">

<p >
Descrição

 </p>

 <input type="text" id="descricao" name="des">
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