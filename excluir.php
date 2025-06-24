<?php
require("conexao.php");
$id = $_POST['btnApagar'];

$resultado = $pdo->prepare("DELETE FROM produto_Caracteristica Where id_produto = ?");
$resultado->execute([$id]);

$resultado = $pdo->prepare("DELETE FROM estoque Where id_produto = ?");
$resultado->execute([$id]);

$resultado = $pdo->prepare("DELETE FROM produto Where id = ?");
$resultado->execute([$id]);

header("Location: produto.php");
?>
