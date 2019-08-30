<?php
  var_dump($_POST);

  if(count($_POST)>0){
     $banco="estacionamento";
     $usuario="estacionamento";
     $senha="joselia";


     $conexao = new PDO("mysql:host=localhost;dbname=${banco}", $usuario, $senha);

     $sql = "Insert into Veiculo values (?,?,?,?)";

     $comando = $conexao->prepare($sql);
     $sucesso= $comando->execute([
       $_POST['plac'],
       $_POST['cod'],
       $_POST['cpf'],
       $_POST['cor']

     	]);

     $mensagem = '';
  if ($sucesso)
  {
    $mensagem = "Veículo cadastrado!";
  }
  else
  {
    
    $mensagem = "Erro: " . $comando->errorInfo()[2];
  }
  
  setcookie('mensagem', $mensagem);
 

     header('Location: veiculos.php');



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
    <nav>
      <ul id="menu">
        <li><a href="estacionados.php">Estacionados</a></li>
        <li><a href="patio.php">Pátios</a></li>
        <li class="ativo"><a href="clientes.php">Clientes</a></li>
        <li><a href="veiculos.php">Veículos</a></li>
        <li><a href="modelos.php">Modelos</a></li>
      </ul>
    </nav>
	</header>
	<div id="container">
		<main>
			<h2>Cadastro de Veículos</h2>

			<form action="cadastrodeveiculos.php" method="post">
      <label for="codigo">



 <label for="plac">
  <p>
   Placa
  </p>
 </label>

 <input type="text" id="placa" name="plac">

<label for="descricao">


<label for="codigo">

	<p>
		Código
	</p>
 </label>

 <input type="text" id="codigo" name="cod">

<label for="cpf">


<p >
CPF

 </p>

 <input type="text" id="cpf" name="cpf">
 </label>

<label for="cor">


<p >
Cor

 </p>

 <input type="text" id="cor" name="cor">
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