<?php 
require 'contato.class.php';
$contato = new Contato();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $contato->excluir($id);
    header("Location: index.php");
}else{
    header("Location: index.php");
}