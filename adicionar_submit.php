<?php 
require 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    $contato->adicionar($email,$nome,$telefone);
    
    header("Location: index.php");
    
}