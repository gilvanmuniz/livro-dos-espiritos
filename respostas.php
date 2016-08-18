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

require_once "LivroInterface.php";
require_once "ServiceDbLivro.php";
require_once "LivroDosEspíritos.php";

try {
    $conexao = new PDO("mysql:host=localhost;dbname=livro_espiritos;charset=utf8","root","gr007879");

} catch (PDOException $e) {
    die( "Erro de senha" .$e->getCode() . "|" . $e->getMessage());
}



$resposta1 = $_GET["resposta"];
echo $resposta1."-";

$livrodosespiritos = new LivroDosEspíritos();

$servicedblivro = new ServiceDbLivro($conexao, $livrodosespiritos);
$resultado1 = $servicedblivro->Find1($resposta1);
echo $resultado1['resposta'];

?>
</form>

</br>
</br>

<a href="index.php">Início</a>
</body>
</html>
