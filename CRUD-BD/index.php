<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($lista as $usuario): ?>
        <tr>
            <td> <?php echo $usuario['id'];?> </td>
            <td> <?php echo $usuario['nome'];?>  </td>
            <td> <?php echo $usuario['email'];?> </td>
            <td>
                <a href="editar.php?id=<?=$usuario['id']?>">[Editar]</a>
                <a href="excluir.php?id=<?=$usuario['id']?>" onclick="return confirm('confirmar exclusão?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
  
</table>

<br>
<a href="adicionar.php">Adicionar usuário</a>
<br>

