<?php
// isso é um comentario

echo "Hello World";
echo "<b> Olá Mundo </b>";

$nome = 'Fulano';
define("PI", 3.14);

echo PI;
echo $nome;

echo "Meu nome é: " . $nome . "<br>";
echo "Meu nome é: $nome<br>";

echo strlen($nome);
echo "<br>";
echo rand(0, 10);
echo "<br>";

$frutas = array('maça', 'banana', 'manga');

echo $frutas[0];

foreach($frutas as $elemento){
    echo $elemento . "<br>";
}

$idades = array("pedro"=>18, "magno"=>40);

echo $idades['magno'] . "<br>";

foreach($idades as $nome=>$idade){
    echo "$nome tem $idade anos <br>";
}


$produtos = array(
    array('nome' => 'Camisa', 'preco' => 80, 'img' => 'https://picsum.photos/100/100?random=1'),
    array('nome' => 'Calça', 'preco' => 200, 'img' => 'https://picsum.photos/100/100?random=2'),
    array('nome' => 'Tenis', 'preco' => 500, 'img' => 'https://picsum.photos/100/100?random=3')
);

echo count($produtos);

echo "<pre>";
var_dump($produtos);
echo "</pre>";

echo $_SERVER['PHP_SELF'];


$nome_usuario = $_GET['nome']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello World</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Imagem</th>
        </tr>

        <?php foreach($produtos as $p) : ?>
        <tr>
            <td><?= $p['nome'] ?></td>
            <td>R$ <?= $p['preco'] ?> </td>
            <td><img src="<?= $p['img'] ?>" alt="" width="100%"></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>Ola, <?= $nome_usuario ?></h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>