<?php
include 'conexao.php';
$id = $POST['id'];
$nome = $POST['nome'];
$preco = $POST['preco'];

$resultado = $pdo->prepare("UPDATE produto SET nome =?, preco=? WHERE id = ?");
$resultado->execute([$nome, $preco, $id]);
header("Location: produto.php");

?>
