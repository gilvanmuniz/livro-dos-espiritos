<!DOCTYPE html>

<html lang="pt-br">


<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="livro.css" rel="stylesheet"/>

</head>

<body>

<header>

    <nav id="menu">
    <ul>
        <li><a href="sobrenos.html">Sobre Nós</a></li>
        <li><a href="index.php">Livro dos Espíritos</a></li>
    </ul>
    </nav>
<img src="imagens/cepa.png"/>
<h1>RESPOSTAS COMENTADAS</h1>

</header>

<?php

header('Content-Type: text/html; charset=utf-8');


require_once "LivroInterface.php";
require_once "ServiceDbLivro.php";
require_once "LivroDosEspíritos.php";
try {
    $conexao = new PDO("mysql:host=localhost;dbname=livro_espiritos;charset=utf8","root","gr007879");

} catch (PDOException $e) {
    die( "Erro de senha" .$e->getCode() . "|" . $e->getMessage());
}


$usuario = $_GET["perguntas"];
echo $usuario."-";

$livrodosespiritos = new LivroDosEspíritos();

$servicedblivro = new ServiceDbLivro($conexao, $livrodosespiritos);
$resultado = $servicedblivro->Find($usuario);
echo $resultado['pergunta'];

?>
<form ACTION="respostas.php" method="get">

            <input type="hidden" name="resposta" value="<?php echo $usuario ?>">
       </br>

    <input type="submit" name="submit" value="RESPOSTA">

</form>

</br>
</br>
<a href="index.php">voltar</a>
</body>
</html>
