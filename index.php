<?php
require 'contato.class.php';
$contato = new Contato();
?>


<h1>Contatos</h1>

<a href="adicionar.php">[ ADICIONAR ]</a> <br><br>

<table border="1" width="800">
   <tr>
       <th>ID</th>
       <th>NOME</th>
       <th>E-MAIL</th>
       <th>TELEFONE</th>
       <th>AÇÕES</th>
   </tr>
   <?php
    $lista = $contato->getAll();
    foreach($lista as $item):
    ?> 
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nome']; ?></td>
        <td><?php echo $item['email']; ?></td>
        <td><?php echo $item['telefone']; ?></td>
        <td>
            <a href="editar.php?id=<?php echo $item['id']; ?>">[ EDITAR ]</a>
            <a href="excluir.php?id=<?php echo $item['id']; ?>">[ EXCLUIR ]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>