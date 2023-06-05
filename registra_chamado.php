<?php
session_start();
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto = $_SESSION['id'] .'#'. $titulo  .'#'. $categoria .'#'. $descricao . PHP_EOL; //PHP_EOL FAZ QUEBRA DE LINHA DE ACORDO COM O SISTEMA!
//abrindo arquivo
$arquivo = fopen('arquivo.txt', 'a');
//escrevendo texto no arquivo
fwrite($arquivo, $texto);
//fechando arquivo
fclose($arquivo);
header('location: abrir_chamado.php')
?>