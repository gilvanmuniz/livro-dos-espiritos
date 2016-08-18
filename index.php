<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

	<title>Livro dos Espíritos</title>

	<link href="livro.css" rel="stylesheet"/>

</head>

<body>


<?php


   require_once "LivroInterface.php";
   require_once "LivroDosEspíritos.php";
   require_once "ServiceDbLivro.php";

$data = new \DateTime("now");
echo $data->format("d/M/Y h:m:s");

try {
    $conexao = new PDO("mysql:host=localhost;dbname=livro_espiritos;charset=utf8","root","gr007879");

} catch (PDOException $e) {
    die( "Erro de senha" .$e->getCode() . "|" . $e->getMessage());
}

$livrodosespiritos = new LivroDosEspíritos();
$livrodosespiritos->setId("4")
	              ->setPergunta("Onde se pode encontrar a prova da existência de Deus?");

$servicedblivro = new ServiceDbLivro($conexao, $livrodosespiritos);
//$servicedblivro->Inserir();


?>
<div>
<header id="cabecalho">

<nav id="menu">
	<h1>Menu Principal</h1>
	<ul>
	<li><a href="sobrenos.html">Sobre Nós</a></li>
	<li><a href="index.php">Livro dos Espíritos</a></li>
	</ul>
</nav>
	<img src="imagens/cepa.png"/>

	<h1>LIVRO DOS ESPÍRITOS</h1>


	</header>


	<form ACTION="perguntas_respostas.php" method="get">
		<fieldset>
			<legend>Escolha uma Pergunta pelo número de 1 a 1018.</legend>
			<label>Pergunta:
			<input type="text" name="perguntas" value="">
			</label></br>
			 </fieldset>
		 <input type="submit" name="submit" value="OK">

	</form>

</div>
</body>
</html>

