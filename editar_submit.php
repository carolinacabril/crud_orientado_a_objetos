
<?php 
require 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['id'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    
    $contato->editar($nome, $telefone, $id);
    
    header("Location: index.php");
    
}