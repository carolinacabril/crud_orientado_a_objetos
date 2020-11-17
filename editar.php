<?php 
require 'contato.class.php';
$contato = new Contato();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $contato->getInfo($id);
    
    if(empty($info['email'])){
     header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>

<h1>EDITAR</h1>
<form method="POST" action="editar_submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $info['nome']; ?>"> <br><br>
    
    E-mail: <br>
    <?php echo $info['email']; ?> <br><br>
    
     Telefone: <br>
    <input type="text" name="telefone" value="<?php echo $info['telefone']; ?>"> <br><br>
    <input type="submit" value="SALVAR">
</form>