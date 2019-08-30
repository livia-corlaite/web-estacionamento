<?php
  var_dump($_POST);

  if(count($_POST)>0){
     $banco="estacionamento";
     $usuario="estacionamento";
     $senha="joselia";


     $conexao = new PDO("mysql:host=localhost;dbname=${banco}", $usuario, $senha);

     $sql = "Insert into Patio values (?,?,?)";

     $comando = $conexao->prepare($sql);
     $sucesso= $comando->execute([
       $_POST['num'],
       $_POST['end'],
       $_POST['cap']

     	]);

     $mensagem = '';
  if ($sucesso)
  {
    $mensagem = "Localização no Pátio foi cadastrado!";
  }
  else
  {
    
    $mensagem = "Erro: " . $comando->errorInfo()[2];
  }
  
  setcookie('mensagem', $mensagem);
 

     header('Location: patio.php');



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
			<h2>Cadastro de Pátio</h2>

			<form action="cadastrodepatio.php" method="post">

<label for="numero">

	<p>
		Número
	</p>
 </label>

 <input type="text" id="numero" name="num">

<label for="endereco">

<p >
Endereço

 </p>

 <input type="text" id="endereco" name="end">
 </label>

<label for="capacidade">

 <p>
Capacidade

 </p>

 <input type="text" id="capacidade" name="cap">
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


