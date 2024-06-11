<?php
include 'conexao.php';
$sql = "select * from categorias;";
$con = Conexao::conectar();
$lstCtgr = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Categorias</title>
</head>
<body>
    <h1>Listar Categorias</h1>
    <table>
       <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th> <!-- Corrigi o texto "Descricao" para "Descrição" -->
       </tr>
      <?php foreach ($lstCtgr as $ctgr) { ?>
      <tr>
        <td><?php echo $ctgr['IDCategoria']; ?></td>
        <td><?php echo $ctgr['NomeCategoria']; ?></td>
        <td><?php echo $ctgr['Descrição']; ?></td> 
      </tr>
      <?php } ?>
    </table>
</body>
</html>
